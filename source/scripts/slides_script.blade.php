<script>
    const SlideWidget = (function () {
        let allPages;
        let lazyPages;
        let scrollHandler;

        const ConfigMap = {
            scrollStopCheckTimeOut: 150,
        };

        function _init(lazyPagesHtmlString){
            scrollHandler = new SlideScrollHandler(this);
            lazyPages = lazyPagesHtmlString;

            document.body.style.overflow = 'hidden';
            allPages = document.querySelectorAll('.ArithmaSlide');
            scrollHandler.init(document.body);
        }

        function _getAllLoadedPages() {
            return allPages;
        }

        function _getAllUnloadedPages() {
            return lazyPages;
        }

        function _getScrollHandler() {
            return scrollHandler;
        }

        function _regatherLoadedPages(){
            allPages = document.querySelectorAll('.ArithmaSlide');
        }

        return {
            init: _init,
            getAllLoadedPages: _getAllLoadedPages,
            getAllUnloadedPages: _getAllUnloadedPages,
            regatherLoadedPages: _regatherLoadedPages,
            config: ConfigMap,
            getScrollHandler: _getScrollHandler
        }
    });

    const SlideScrollHandler = (function (aws) {
        let swipeStartY = 0;

        let isScrolling = false;
        let isSwiping = false;
        let scrollTimer;
        let swipeTimer;

        let pageIndex = 0;

        function _init (parent) {
            parent.addEventListener('touchstart', function(e) {
                swipeStartY = e.touches[0].clientY;}, {passive: false});
            parent.addEventListener("wheel", MouseWheelHandler, {passive: false});
            parent.addEventListener("touchmove", TouchScrollHandler, {passive: false});

            if (parent !== document.body) {
                parent.onmouseover = ()=> document.body.style.setProperty('overflow','hidden','important');
                parent.onmouseout = ()=> document.body.style.removeProperty('overflow');
            }
        }

        function slideToDirection(dir) {
            let previousPageIndex = pageIndex;
            if (dir < 0) {
                slidePageUp();
            } else if (dir > 0) {
                slidePageDown();
            }
            if (aws.config.hasOwnProperty('pageIndexCallback')) {
                aws.config.pageIndexCallback(previousPageIndex, pageIndex);
            }
        }

        function _triggerUp() {
            slideToDirection(-1);
        }

        function _triggerDown() {
            slideToDirection(1);
        }

        function MouseWheelHandler (event) {
            if (!isScrolling){
                slideToDirection(event.deltaY);
            }

            isScrolling = true;
            clearTimeout( scrollTimer );
            scrollTimer = setTimeout(function() {
                isScrolling=false;
            }, aws.config.scrollStopCheckTimeOut);
        }

        function TouchScrollHandler(event) {
            let diff = swipeStartY - event.touches[0].clientY;
            if (Math.abs(diff)<20){
                return;
            }

            if (!isSwiping){
                slideToDirection(diff);
            }

            isSwiping = true;
            clearTimeout( swipeTimer );
            swipeTimer = setTimeout(function() {
                isSwiping=false;
            }, aws.config.scrollStopCheckTimeOut);
        }

        function slidePageDown() {
            let previousPage = aws.getAllLoadedPages()[pageIndex];

            if (pageIndex >= aws.getAllLoadedPages().length - 1 &&
            aws.getAllUnloadedPages().length > 0){
                let tempDiv = document.createElement('div');
                previousPage.insertAdjacentElement('afterend', tempDiv);
                tempDiv.outerHTML = aws.getAllUnloadedPages()[0];
                aws.getAllUnloadedPages().shift();
                aws.regatherLoadedPages();
            }

            if (pageIndex < aws.getAllLoadedPages().length - 1) {
                pageIndex++;

                previousPage.classList.remove(aws.config.cssAnimationOut);
                previousPage.classList.remove(aws.config.cssAnimationIn);
                previousPage.classList.remove(aws.config.cssAnimationNextIn);

                previousPage.classList.add(aws.config.cssAnimationOut);

                if(aws.config.hasOwnProperty('cssAnimationNextOut')){
                    let nextPage = aws.getAllLoadedPages()[pageIndex];
                    nextPage.classList.remove(aws.config.cssAnimationNextOut);
                }

                if(aws.config.hasOwnProperty('cssAnimationNextIn')){
                    previousPage.classList.remove(aws.config.cssAnimationNextIn);

                    let nextPage = aws.getAllLoadedPages()[pageIndex];

                    nextPage.classList.remove(aws.config.cssAnimationIn);
                    nextPage.classList.remove(aws.config.cssAnimationOut);
                    nextPage.classList.remove(aws.config.cssAnimationNextIn);


                    nextPage.classList.add(aws.config.cssAnimationNextIn);
                }
            } else if (aws.config.hasOwnProperty('noSlideDown')) {
                aws.config.noSlideDown();
            }
        }

        function slidePageUp () {
            if (pageIndex !== 0) {

                let previousPage = aws.getAllLoadedPages()[pageIndex];
                if (aws.config.hasOwnProperty('cssAnimationNextOut')) {
                    aws.getAllLoadedPages()[pageIndex]
                        .classList.add(aws.config.cssAnimationNextOut);
                }
                if (aws.config.hasOwnProperty('cssAnimationNextIn')) {
                    aws.getAllLoadedPages()[pageIndex]
                        .classList.add(aws.config.cssAnimationNextIn);
                }
                previousPage.classList.remove(aws.config.cssAnimationIn);
                previousPage.classList.remove(aws.config.cssAnimationOut);

                pageIndex--;
                let nextPage = aws.getAllLoadedPages()[pageIndex];
                nextPage.classList.add(aws.config.cssAnimationIn);
            } else if (aws.config.hasOwnProperty('noSlideUp')) {
                aws.config.noSlideUp();
            }
        }

        return {
            init: _init,
            triggerUp: _triggerUp,
            triggerDown: _triggerDown
        }
    });

</script>