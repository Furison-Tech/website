<script>
    let carouselInterval = null;
    let oldScreenSmallEnough = false;

    function slideRowUp(serviceRows){
        serviceRows.forEach((serviceRow)=>{
            let firstEl = serviceRow.children[0];
            let nextHr = firstEl.nextElementSibling;
            firstEl.style.marginTop = "-56px";
            setTimeout(function () {
                serviceRow.removeChild(firstEl);
                serviceRow.removeChild(nextHr);
                firstEl.style.marginTop = 0;
                serviceRow.appendChild(nextHr);
                serviceRow.appendChild(firstEl);
            }, 1000);
        });
    }

    document.addEventListener("DOMContentLoaded", function (){
        manageCarousel();
    });

    window.addEventListener("resize", () => {
        manageCarousel();
    });

    function manageCarousel(){
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

</script>