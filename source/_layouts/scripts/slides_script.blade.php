<div class="absolute w-screen h-screen">
    <div class="relative h-screen">
        <div id="ArithmaPaginationContainer" class="text-sky-400 city-fade-in">
        </div>
    </div>
</div>


<script>
    let in_out_anims = [
        /* titles */
        ['driveInLeft', 'driveOutLeft'],
        ['driveInRight', 'driveOutRight'],
        ['fadeIn', 'fadeOut'], /* buttons */
        ['text-wipe-in', 'swoopOutTop'],

        ['rollInBottom', 'rollOutLeft'], /* icons */
        ['pullUp', 'fold'], /* cards */
        ['spinIn', 'spinOut'], /* logo */
    ]

    let asw;
    let apc;
    let slides_count;
    let slide_index = 0;
    document.addEventListener("DOMContentLoaded", function() {
        apc = document.getElementById('ArithmaPaginationContainer');
        let paginationpoints = [];
        slides_count = document.querySelectorAll('.ArithmaSlide').length;
        for(let i = 0; i<slides_count; i++){
            let point = document.createElement('span');
            point.classList.add('my-2', 'glassify-bg');
            if (i===0){
                point.classList.add('fillPaginationPoint');
            }
            apc.appendChild(point);
            paginationpoints.push(point);
        }

        asw = new window.ArithmaSlides.ArithmaSlideWidget();

        asw.config.scrollStopCheckTimeOut = 150;

        asw.config.cssAnimationIn = 'slideAboveInWhole';
        asw.config.cssAnimationOut = 'slideAboveOutWhole';

        asw.config.cssAnimationNextIn = 'slideBelowInHalf';
        asw.config.cssAnimationNextOut = 'slideBelowOutHalf';

        asw.config.pageIndexCallback = function (previousPageIndex, newPageIndex){
            if (previousPageIndex===newPageIndex){
                return;
            }
            slide_index = newPageIndex;

            setTimeout(shiftPaginationHandler, 500*(+(slide_index===slides_count-1)+1));

            paginationpoints[previousPageIndex].classList.remove('fillPaginationPoint');
            paginationpoints[newPageIndex].classList.add('fillPaginationPoint');

            let previousSlide = asw.getAllPages()[previousPageIndex];
            let newSlide = asw.getAllPages()[newPageIndex];

            let newSlideEls = newSlide.querySelectorAll("*");
            for (let i = 0; i<newSlideEls.length; i++){
                let element = newSlideEls[i];
                for (let i = 0; i<in_out_anims.length; i++){
                    if (element.classList.contains(in_out_anims[i][1])){
                        element.classList.remove(in_out_anims[i][1]);
                        setTimeout(function () {
                            element.classList.add(in_out_anims[i][0]);
                        }, 600);
                    }
                }
            }

            let prevSlideEls = previousSlide.querySelectorAll("*");
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
        })

        asw.init();
    });
</script>
