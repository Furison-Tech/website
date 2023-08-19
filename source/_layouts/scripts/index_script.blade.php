<div class="fixed w-screen top-0 left-0 z-20 h-[42px]">
    <div class="relative">
        <div id="ArithmaPaginationContainer" class="text-sky-400 city-fade-in">
            <span class="my-2 glassify-bg fillPaginationPoint"></span>
            <span class="my-2 glassify-bg"></span>
            <span class="my-2 glassify-bg"></span>
            <span class="my-2 glassify-bg"></span>
        </div>
    </div>
</div>

<script>
    let carouselInterval = null;
    let oldScreenSmallEnough = false;

    function slideRowUp(serviceRows){
        serviceRows.forEach((serviceRow)=>{
            let firstEl = serviceRow.children[0];
            let nextHr = firstEl.nextElementSibling;
            firstEl.style.marginTop = "-57px";
            setTimeout(function () {
                serviceRow.removeChild(firstEl);
                serviceRow.removeChild(nextHr);
                firstEl.style.marginTop = 0;
                serviceRow.appendChild(nextHr);
                serviceRow.appendChild(firstEl);
            }, 500);
        });
    }

    window.addEventListener("resize", () => {
        manageCarousel();
    });

    let serviceSlideLoaded = false;
    function manageCarousel(){
        if (document.getElementById('services-slide')===null){
            return;
        }

        let screenSmallEnough = window.matchMedia("(max-width: 1023px)").matches;
        if (screenSmallEnough && !oldScreenSmallEnough){
            let serviceRows = document.querySelectorAll("[data-frs-service-carousel]");
            carouselInterval = setInterval(function () {
                slideRowUp(serviceRows);
            }, 4000);
        } else if (!screenSmallEnough && oldScreenSmallEnough && carouselInterval!==null){
            clearInterval(carouselInterval);
            carouselInterval=null;
        }
        oldScreenSmallEnough = screenSmallEnough;
    }

    let in_out_anims = [
        ['driveInLeft', 'driveOutLeft'],
        ['driveInRight', 'driveOutRight'],
        ['text-expand-effect', 'swoopOutTop'],

        ['rollInBottom', 'rollOutLeft'],
        ['pullUp', 'fold'],
        ['translate-y-0', 'translate-y-full'],

        ['fadeIn', 'fadeOut']
    ];

    let asw;
    let apc;
    let slides_count = 4;
    let slide_index = 0;

    let anim_obj_slides = [];

    document.addEventListener("DOMContentLoaded", function() {
        let selector = limitAnimations ? '[data-frs-animate="1"]' : '[data-frs-animate]';
        let slides = document.querySelectorAll(".ArithmaSlide");
        for (let i = 0; i < slides.length; i++) {
            anim_obj_slides[i]=slides[i].querySelectorAll(selector);
        }

        apc = document.getElementById('ArithmaPaginationContainer');
        let paginationpoints = apc.children;

        asw = new SlideWidget();

        asw.config.cssClassesTopSlide = 'slide-move-up';
        asw.config.cssClassesBottomSlide = ['slide-start-pos', 'slide-start-dark'];

        asw.config.pageIndexCallback = function (previousPageIndex, newPageIndex){
            if (previousPageIndex===newPageIndex){
                return;
            }
            slide_index = newPageIndex;

            if (!serviceSlideLoaded && newPageIndex === 2){
                serviceSlideLoaded = true;
                setTimeout(function (){
                    manageCarousel();
                }, 2000);
            }

            setTimeout(shiftPaginationHandler, 500*(+(slide_index===slides_count-1)+1));

            paginationpoints[previousPageIndex].classList.remove('fillPaginationPoint');
            paginationpoints[newPageIndex].classList.add('fillPaginationPoint');

            let newSlideEls = anim_obj_slides[newPageIndex];
            setTimeout(function () {
                for (let i = 0; i < newSlideEls.length; i++) {
                    let element = newSlideEls[i];
                    for (let i = 0; i < in_out_anims.length; i++) {
                        if (element.classList.contains(in_out_anims[i][1])) {
                            element.classList.remove(in_out_anims[i][1]);
                            element.classList.add(in_out_anims[i][0]);
                        }
                    }
                }
            }, 600);

            let prevSlideEls = anim_obj_slides[previousPageIndex];
            for (let i = 0; i<prevSlideEls.length; i++){
                let element = prevSlideEls[i];
                for (let i = 0; i<in_out_anims.length; i++){
                    if (element.classList.contains(in_out_anims[i][0])) {
                        element.classList.remove(in_out_anims[i][0]);
                        element.classList.add(in_out_anims[i][1]);
                    }
                }
            }
        };

        function shiftPaginationHandler(){
            if (slide_index===slides_count-1){
                apc.style.marginTop = '-'+(document.querySelector('footer').clientHeight)+"px";
            } else {
                apc.style.marginTop = 0;
            }
        }

        window.addEventListener('resize', function (){
            shiftPaginationHandler();
        });

        asw.init();
    });
</script>
