<script>
    let imagesLoaded = 0;

    function handleImageLoad(){
        imagesLoaded++;

        if (imagesLoaded===14){
            document.getElementById('parallax-scene').classList.remove('opacity-0');
        }
    }
</script>

<div class="ArithmaSlide bg-0c1929" style="z-index: 4;">
    <div class="relative"
         style="background: linear-gradient(to top, #0c1929, rgba(12,25,42,0.15) 24%, rgba(12,25,42,0.1));">

        <div id="parallax-scene" class="absolute par-scene-dims bg-0c1929 opacity-0 transition-opacity duration-1000 delay-1000"
             style="z-index: -1; margin-left: -2.5vw; margin-top: -2.5vh;">

            <div class="par-scene-dims" data-depth="0.24" style="position: relative">
                <div class="flex par-scene-dims flex-nowrap overflow-x-hidden">
                    <img class="par-scene-dims object-contain object-top cloud-hover-left opacity-50 flex-none"
                         src="/assets/images/landing/cloud1.webp" alt="clouds" onload="handleImageLoad()"
                         style="animation-duration: 160s">
                    <img class="par-scene-dims object-contain object-top opacity-50 flex-none"
                         src="/assets/images/landing/cloud1.webp" alt="clouds" onload="handleImageLoad()">
                </div>
            </div>

            <div class="w-full h-full" data-depth="0.2" style="position: absolute; top: 0; left: 0;">
                <img class="w-full h-full object-cover object-bottom" onload="handleImageLoad()"
                     src="/assets/images/landing/base.webp" alt="skyline">
            </div>

            <div class="w-full h-full" data-depth="0.18" style="position: absolute; top: 0; left: 0;">
                <img class="w-full h-full object-cover object-bottom" onload="handleImageLoad()"
                     src="/assets/images/landing/b1.webp" alt="building 1">
            </div>

            <div class="w-full h-full" data-depth="0.16" style="position: absolute; top: 0; left: 0;">
                <img class="w-full h-full object-cover object-bottom" onload="handleImageLoad()"
                     src="/assets/images/landing/b2.webp" alt="building 2">
            </div>
            
            <div class="w-full h-full" data-depth="0.14" style="position: absolute; top: 0; left: 0;">
                <img class="w-full h-full object-cover object-bottom" onload="handleImageLoad()"
                     src="/assets/images/landing/b4.webp" alt="building 4">
            </div>

            <div class="w-full h-full" data-depth="0.1" style="position: absolute; top: 0; left: 0;">
                <img class="w-full h-full object-cover object-bottom" onload="handleImageLoad()" style="margin-top: 15vh"
                     src="/assets/images/landing/b5.webp" alt="building 5">
            </div>

            <div class="w-full h-full" data-depth="0.16" style="position: absolute; top: 0; left: 0;">
                <img class="w-full h-full object-cover object-bottom" onload="handleImageLoad()"
                     src="/assets/images/landing/b6.webp" alt="building 6">
            </div>

            <div class="w-full h-full" data-depth="0.08" style="position: absolute; top: 0; left: 0;">
                <img class="w-full h-full object-cover object-bottom" onload="handleImageLoad()"
                     src="/assets/images/landing/b7.webp" alt="building 7">
            </div>

            <div class="w-full h-full" data-depth="0.14" style="position: absolute; top: 0; left: 0;">
                <img class="w-full h-full object-cover object-bottom" onload="handleImageLoad()"
                     src="/assets/images/landing/b8.webp" alt="building 8">
            </div>

            <div class="w-full h-full" data-depth="0.12" style="position: absolute; top: 0; left: 0;">
                <img class="w-full h-full object-cover object-bottom" onload="handleImageLoad()"
                     src="/assets/images/landing/b9.webp" alt="building 9">
            </div>

            <div class="w-full h-full" data-depth="0.04" style="position: absolute; top: 0; left: 0;">
                <img class="w-full h-full object-cover object-bottom" onload="handleImageLoad()"
                     src="/assets/images/landing/b10.webp" alt="building 10">
            </div>

            <div class="par-scene-dims" data-depth="0.2" style="position: absolute; top: 0; left: 0;">
                <div class="flex par-scene-dims flex-nowrap overflow-x-hidden">
                    <img class="par-scene-dims object-contain object-top cloud-hover-left flex-none"
                         src="/assets/images/landing/cloud2.webp" alt="clouds" onload="handleImageLoad()"
                         style="animation-duration: 100s">
                    <img class="par-scene-dims object-contain object-top flex-none"
                         src="/assets/images/landing/cloud2.webp" alt="clouds" onload="handleImageLoad()">
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 relative">
            <div class="flex h-screen items-center justify-center">

                <div class="text-center" style="margin-top: 14px;">
                    <h1 class="inline-block text-5xl lg:text-8xl font-black capitalize mb-0 text-wipe-bg
                    text-transparent bg-clip-text duration-1000 delay-300 text-wipe-in">
                        Furison Tech
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const isUserUsingMobile = () => {
        let isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        if (!isMobile) {
            isMobile = (('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0));
        }
        return isMobile
    }

    document.addEventListener('DOMContentLoaded', function (){
        if (!isUserUsingMobile()){
            let scene = document.getElementById('parallax-scene');
            let parallaxInstance = new Parallax(scene, {
                relativeInput: true,
                invertX: false,
                invertY: false
            });
        }
    });
</script>