<script>
    const SlideWidget = (function () {
        let allPages;
        let lazyPages;
        let scrollHandler;
        let limitAnimations;

        const ConfigMap = {
            scrollStopCheckTimeOut: 150,
        };

        function _init(lazyPagesHtmlString, lowEndDevice){
            limitAnimations = lowEndDevice;
            scrollHandler = new SlideScrollHandler(this);
            lazyPages = lazyPagesHtmlString;

            document.body.style.overflow = 'hidden';
            allPages = Array.from(document.querySelectorAll('.ArithmaSlide'));
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

        function _addLoadedPage(lazyLoadedPage){
            allPages.push(lazyLoadedPage);
        }

        function _isLimitAnimations() {
            return limitAnimations;
        }

        return {
            init: _init,
            getAllLoadedPages: _getAllLoadedPages,
            getAllUnloadedPages: _getAllUnloadedPages,
            addLoadedPage: _addLoadedPage,
            config: ConfigMap,
            isLimitAnimations: _isLimitAnimations,
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
            if (Math.abs(diff)<50){
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

            if (pageIndex+1 >= aws.getAllLoadedPages().length - 1 &&
            aws.getAllUnloadedPages().length > 0){
                let tempDiv = document.createElement('div');
                previousPage.insertAdjacentElement('afterend', tempDiv);
                tempDiv.outerHTML = aws.getAllUnloadedPages()[0];
                aws.getAllUnloadedPages().shift();
                aws.addLoadedPage(previousPage.nextElementSibling);
            }

            if (pageIndex < aws.getAllLoadedPages().length - 1) {
                pageIndex++;
                let nextPage = aws.getAllLoadedPages()[pageIndex];

                previousPage.classList.add(aws.config.cssClassesTopSlide);
                nextPage.classList.remove(...aws.config.cssClassesBottomSlide);
            }
        }

        function slidePageUp () {
            if (pageIndex !== 0) {
                let nextPage = aws.getAllLoadedPages()[pageIndex-1];
                let previousPage = aws.getAllLoadedPages()[pageIndex];

                nextPage.classList.remove(aws.config.cssClassesTopSlide);
                previousPage.classList.add(...aws.config.cssClassesBottomSlide);

                pageIndex--;
            }
        }

        return {
            init: _init,
            triggerUp: _triggerUp,
            triggerDown: _triggerDown
        }
    });

</script>