---
title: "Furison Tech ⋅ Our Services"
description: "The (app) projects that Furison works on."
---

@extends('_layouts.main')

@section('body')
    <div class="absolute w-screen h-screen">
        <div class="relative w-screen h-screen">
            <div class="absolute top-0 w-screen h-screen"
                 style="background: linear-gradient(#0c1929 50%, rgba(12,25,41,0.25)) rgba(12,25,41,0.55);
                  z-index: 1;"></div>

            <img class="w-screen absolute h-full object-cover object-top" style="z-index: 0; top: 0;"
                 src="/assets/images/setup.jpg" alt="gaming setup AI generated">
        </div>
    </div>

    <section class="w-screen min-h-screen bg-cover overflow-x-hidden bg-center relative" style="z-index: 2">
            <div class="container mx-auto px-12 md:px-8 lg:px-4 relative">
                <div class="flex min-h-screen items-center">

                    <div class="w-screen mt-[107px] mb-[150px] sm:mb-[127px] md:mb-[91px] xl:mb-[123px]">
                        <h1 class="text-center text-3xl md:text-5xl lg:text-7xl font-black text-white capitalize fadeIn animation-forwards
                    capitalize duration-1250">
                            Our Services
                        </h1>

                        <div class="grid grid-cols-1 md:grid-cols-3 xl:gap-x-16 gap-x-8 gap-y-8 mt-12">
                            <div class="relative flex items-start justify-between rounded-xl p-4 shadow-xl sm:p-6 lg:p-8
                                        duration-1000 unfold delay-100 animation-forwards glassify-full">
                                <div class="w-full">
                                    <div class="flex">
                                        <p class="text-sm md:text-base lg:text-xl font-bold text-white">
                                            <span class="hidden lg:inline">Services</span> For Consumers
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                             class="fill-indigo-400 w-5 ml-2 text-indigo-400 drop-shadow-current-extreme">
                                            <path d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm1.5 1H8c-3.309 0-6 2.691-6 6v1h15v-1c0-3.309-2.691-6-6-6z"></path><path d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z"></path>
                                        </svg>
                                    </div>

                                    <div class="text-sm w-full overflow-hidden -mb-2 mt-2">
                                        @include('_layouts.components.project_carousels.for_consumers')
                                    </div>
                                </div>
                            </div>

                            <div class="relative flex items-start justify-between rounded-xl p-4 shadow-xl sm:p-6 lg:p-8
                                        duration-1000 unfold delay-200 animation-forwards glassify-full">
                                <div class="w-full">
                                    <div class="flex">
                                        <p class="text-sm md:text-base lg:text-xl font-bold text-white">
                                            <span class="hidden lg:inline">Services</span> For Businesses
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                             class="fill-sky-400 w-5 ml-2 text-sky-400 drop-shadow-current-extreme">
                                            <path d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v3h20V8c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm5 10h-4v-2H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-8v2z"></path>
                                        </svg>
                                    </div>

                                    <div class="text-sm w-full overflow-hidden -mb-2 mt-2">
                                        @include('_layouts.components.project_carousels.for_businesses')
                                    </div>
                                </div>
                            </div>

                            <div class="relative flex items-start justify-between rounded-xl p-4 shadow-xl sm:p-6 lg:p-8
                                        duration-1000 unfold delay-300 animation-forwards glassify-full">
                                <div class="w-full">
                                    <div class="flex">
                                        <p class="text-sm md:text-base lg:text-xl font-bold text-white">
                                            Open-Source <span class="hidden lg:inline">Projects</span>
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                             class="fill-teal-400 w-5 ml-2 text-teal-400 drop-shadow-current-extreme">
                                            <path d="m21.62 11.108-8.731-8.729a1.292 1.292 0 0 0-1.823 0L9.257 4.19l2.299 2.3a1.532 1.532 0 0 1 1.939 1.95l2.214 2.217a1.53 1.53 0 0 1 1.583 2.531c-.599.6-1.566.6-2.166 0a1.536 1.536 0 0 1-.337-1.662l-2.074-2.063V14.9c.146.071.286.169.407.29a1.537 1.537 0 0 1 0 2.166 1.536 1.536 0 0 1-2.174 0 1.528 1.528 0 0 1 0-2.164c.152-.15.322-.264.504-.339v-5.49a1.529 1.529 0 0 1-.83-2.008l-2.26-2.271-5.987 5.982c-.5.504-.5 1.32 0 1.824l8.731 8.729a1.286 1.286 0 0 0 1.821 0l8.69-8.689a1.284 1.284 0 0 0 .003-1.822"></path>
                                        </svg>
                                    </div>

                                    <div class="text-sm w-full overflow-hidden -mb-2 mt-2">
                                        @include('_layouts.components.project_carousels.open_source')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
@endsection
