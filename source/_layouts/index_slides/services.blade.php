<div class="ArithmaSlide transition-slide slide-start-pos slide-start-dark" style="z-index: 2" id="services-slide">
    <div class="relative" style="background: linear-gradient(#0c1929 50%, rgba(12,25,41,0)) rgba(12,25,41,0.45)">
        <img class="w-screen absolute h-screen object-cover object-left-top" style="z-index: -1;"
             src="/assets/images/city_night.jpg" alt="city pond at night">


        <div class="container mx-auto px-12 md:px-8 lg:px-4 relative">
            <div class="flex h-screen items-center">

                <div class="flex flex-col w-fit mx-auto frs-hide-big fadeIn animation-forwards duration-1250"
                     data-frs-animate>
                    <h2 class="text-center text-3xl md:text-5xl lg:text-7xl font-black text-white capitalize">
                        Furison's<br>
                        <span class="underline decoration-sky-500 decoration-dashed underline-offset-8">
                            Services
                        </span>
                    </h2>

                    <div class="mt-8 w-fit mx-auto md:mx-0">
                        <p class="text-white font-normal text-center md:text-left">
                            Mainly focused on developing ready-to-use software/web applications.<br>
                        </p>
                    </div>

                    <div class="inline-block mt-8 w-fit mx-auto md:mx-0">
                        <a class="code-font rounded-br-2xl rounded-tl-2xl rounded-bl-md rounded-tr-md text-white
                        from-sky-400 via-sky-500 to-blue-600 bg-gradient-to-br border-b-2
                        border-blue-600 focus:border-blue-800 focus:shadow-xl text-sm px-5 py-2.5 transition-colors duration-200"
                                href="/services">Explore ⋅ All
                        </a>
                        <a href="/contact" class="rounded-bl-2xl rounded-tr-2xl rounded-br-md rounded-tl-md glassify-full
                        px-5 py-2.5 text-white code-font ml-2 text-sm border-t-0 border-x-0">
                            Get In Touch
                        </a>
                    </div>
                </div>

                <div class="w-screen frs-hide-small">
                    <h2 class="text-center text-3xl md:text-5xl lg:text-7xl font-black text-white capitalize fadeIn animation-forwards
                    capitalize duration-1250" data-frs-animate>
                        Our Services
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 xl:gap-x-16 gap-x-8 gap-y-8 mt-12">
                        <div class="relative flex items-start justify-between rounded-xl p-4 shadow-xl sm:p-6 lg:p-8
                                        duration-1000 fold delay-100 animation-forwards glassify-full"
                             data-frs-animate="1" style="will-change: transform">

                            <div class="w-full">
                                <div class="flex">
                                    <p class="text-md lg:text-xl font-bold text-white">
                                        <span class="hidden lg:inline">Services</span> For Consumers
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                         class="fill-indigo-400 w-5 ml-2 text-indigo-400 drop-shadow-current-extreme">
                                        <path d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm1.5 1H8c-3.309 0-6 2.691-6 6v1h15v-1c0-3.309-2.691-6-6-6z"></path><path d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z"></path>
                                    </svg>
                                </div>

                                <div class="text-sm w-full overflow-hidden h-[48px] lg:h-fit lg:-mb-2 mt-2"
                                     data-frs-service-carousel>
                                    @include('_layouts.components.project_carousels.for_consumers')
                                </div>
                            </div>
                        </div>

                        <div class="relative flex items-start justify-between rounded-xl p-4 shadow-xl sm:p-6 lg:p-8
                                        duration-1000 fold delay-200 animation-forwards glassify-full"
                             data-frs-animate="1" style="will-change: transform">

                            <div class="w-full">
                                <div class="flex">
                                    <p class="text-md lg:text-xl font-bold text-white">
                                        <span class="hidden lg:inline">Services</span> For Businesses
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                         class="fill-sky-400 w-5 ml-2 text-sky-400 drop-shadow-current-extreme">
                                        <path d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v3h20V8c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm5 10h-4v-2H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-8v2z"></path>
                                    </svg>
                                </div>

                                <div class="text-sm w-full overflow-hidden h-[48px] lg:h-fit lg:-mb-2 mt-2">
                                    @include('_layouts.components.project_carousels.for_businesses')
                                </div>
                            </div>
                        </div>

                        <div class="relative flex items-start justify-between rounded-xl p-4 shadow-xl sm:p-6 lg:p-8
                                        duration-1000 fold delay-300 animation-forwards glassify-full"
                             data-frs-animate="1" style="will-change: transform">

                            <div class="w-full">
                                <div class="flex">
                                    <p class="text-md lg:text-xl font-bold text-white">
                                        Open-Source <span class="hidden lg:inline">Projects</span>
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                         class="fill-teal-400 w-5 ml-2 text-teal-400 drop-shadow-current-extreme">
                                        <path d="m21.62 11.108-8.731-8.729a1.292 1.292 0 0 0-1.823 0L9.257 4.19l2.299 2.3a1.532 1.532 0 0 1 1.939 1.95l2.214 2.217a1.53 1.53 0 0 1 1.583 2.531c-.599.6-1.566.6-2.166 0a1.536 1.536 0 0 1-.337-1.662l-2.074-2.063V14.9c.146.071.286.169.407.29a1.537 1.537 0 0 1 0 2.166 1.536 1.536 0 0 1-2.174 0 1.528 1.528 0 0 1 0-2.164c.152-.15.322-.264.504-.339v-5.49a1.529 1.529 0 0 1-.83-2.008l-2.26-2.271-5.987 5.982c-.5.504-.5 1.32 0 1.824l8.731 8.729a1.286 1.286 0 0 0 1.821 0l8.69-8.689a1.284 1.284 0 0 0 .003-1.822"></path>
                                    </svg>
                                </div>

                                <div class="text-sm w-full overflow-hidden h-[48px] lg:h-fit lg:-mb-2 mt-2"
                                     data-frs-service-carousel>
                                    @include('_layouts.components.project_carousels.open_source')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>