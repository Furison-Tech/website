<div class="ArithmaSlide" style="z-index: 4; background: #0c1929">
    <div class="relative"
         style="background: linear-gradient(to top, #0c1929, rgba(12,25,42,0.15) 24%, rgba(12,25,42,0.1));">

        <div id="parallax-scene" class="absolute bg-cover bg-top city-fade-in"
             style="z-index: -1; margin-left: -2.5vw; margin-top: -2.5vh;
             background: #0c1929; width: 105vw; height: 105vh;">

            <div class="par-scene-dims" data-depth="0.24">
                <div class="flex par-scene-dims flex-nowrap overflow-x-hidden">
                    <img class="par-scene-dims object-cover object-top cloud-hover-left opacity-50 flex-none"
                         src="/assets/images/landing/cloud1.png" alt="clouds" style="animation-duration: 160s">
                    <img class="par-scene-dims object-cover object-top opacity-50 flex-none"
                         src="/assets/images/landing/cloud1.png" alt="clouds">
                </div>
            </div>

            <div class="w-full h-full" data-depth="0.2">
                <img class="w-full h-full object-cover object-bottom"
                     src="/assets/images/landing/base.png" alt="skyline">
            </div>

            <div class="w-full h-full" data-depth="0.18">
                <img class="w-full h-full object-cover object-bottom"
                     src="/assets/images/landing/b1.png" alt="building 1">
            </div>

            <div class="w-full h-full" data-depth="0.16">
                <img class="w-full h-full object-cover object-bottom"
                     src="/assets/images/landing/b2.png" alt="building 2">
            </div>

            <div class="w-full h-full" data-depth="0.08">
                <img class="w-full h-full object-cover object-bottom"
                     src="/assets/images/landing/b3.png" alt="building 3">
            </div>

            <div class="w-full h-full" data-depth="0.14">
                <img class="w-full h-full object-cover object-bottom"
                     src="/assets/images/landing/b4.png" alt="building 4">
            </div>

            <div class="w-full h-full" data-depth="0.1">
                <img class="w-full h-full object-cover object-bottom" style="margin-top: 15vh"
                     src="/assets/images/landing/b5.png" alt="building 5">
            </div>

            <div class="w-full h-full" data-depth="0.16">
                <img class="w-full h-full object-cover object-bottom"
                     src="/assets/images/landing/b6.png" alt="building 6">
            </div>

            <div class="w-full h-full" data-depth="0.08">
                <img class="w-full h-full object-cover object-bottom"
                     src="/assets/images/landing/b7.png" alt="building 7">
            </div>

            <div class="w-full h-full" data-depth="0.14">
                <img class="w-full h-full object-cover object-bottom"
                     src="/assets/images/landing/b8.png" alt="building 8">
            </div>

            <div class="w-full h-full" data-depth="0.12">
                <img class="w-full h-full object-cover object-bottom"
                     src="/assets/images/landing/b9.png" alt="building 9">
            </div>

            <div class="w-full h-full" data-depth="0.04">
                <img class="w-full h-full object-cover object-bottom"
                     src="/assets/images/landing/b10.png" alt="building 10">
            </div>

            <div class="w-full h-full" data-depth="0.02">
                <img class="w-full h-full object-cover object-bottom"
                     src="/assets/images/landing/b11.png" alt="bush 11">
            </div>

            <div class="par-scene-dims" data-depth="0.2">
                <div class="flex par-scene-dims flex-nowrap overflow-x-hidden">
                    <img class="par-scene-dims object-cover object-top cloud-hover-left flex-none"
                         src="/assets/images/landing/cloud2.png" alt="clouds" style="animation-duration: 100s">
                    <img class="par-scene-dims object-cover object-top flex-none"
                         src="/assets/images/landing/cloud2.png" alt="clouds">
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
    document.addEventListener('DOMContentLoaded', function (){
        let scene = document.getElementById('parallax-scene');
        let parallaxInstance = new Parallax(scene, {
            relativeInput: true,
            invertX: false,
            invertY: false
        });
    });
</script>