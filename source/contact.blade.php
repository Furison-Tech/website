---
title: "Furison Tech ⋅ Contact Info"
description: "How to get in touch with Furison."
---


@extends('_layouts.main')

@section('body')
    <div class="absolute w-screen h-screen">
        <div class="relative w-screen h-screen">
            <div class="absolute top-0 w-screen h-screen"
                 style="background: linear-gradient(#0c1929 50%, rgba(12,25,41,0.25)) rgba(12,25,41,0.55);
                  z-index: 1;"></div>

            <img class="w-screen absolute h-full object-cover object-bottom" style="z-index: 0; top: 0;"
                 src="/assets/images/moon.jpg" alt="moon close up AI generated">
        </div>
    </div>

    <section class="w-screen min-h-screen bg-cover overflow-x-hidden bg-center relative" style="z-index: 2;">
        <div class="container mx-auto px-12 md:px-8 lg:px-4 relative">
            <div class="flex min-h-screen items-center">
                <div class="w-screen mt-[107px] mb-[150px] sm:mb-[127px] md:mb-[91px] xl:mb-[123px]">
                    <h1 class="text-center text-3xl md:text-5xl lg:text-7xl font-black text-white capitalize fadeIn animation-forwards
                    capitalize duration-1250">
                        Contact Information
                    </h1>

                    <div class="grid grid-cols-1 md:grid-cols-2 xl:gap-16 gap-8 mt-12">
                        <div class="flex items-center overflow-visible">
                            <div class="w-36 lg:w-48 mr-8 xl:mr-16 overflow-visible flex-none">
                                @include('_layouts.components.logolinesvg')
                            </div>

                            <div class="text-white swoopInBottom duration-1000 animation-forwards">
                                <h2 class="font-bold text-md lg:text-xl">Before you reach out...</h2>
                                <p class="font-normal mt-4">
                                    Furison is not open for any new clients at the moment. For now, our focus lies on ready-to-use
                                    software/web applications.
                                </p>
                            </div>
                        </div>

                        <div class="relative flex items-center rounded-xl p-4 shadow-xl sm:p-6 lg:p-8
                                        duration-1000 swoopInBottom animation-forwards glassify-full">
                            <div class="w-full">

                                <div class="flex gap-4 pb-2 items-center">
                                    <div class="flex-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                             class="w-6 fill-indigo-400 text-indigo-400 drop-shadow-current-extreme">
                                            <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4.7-8 5.334L4 8.7V6.297l8 5.333 8-5.333V8.7z"></path>
                                        </svg>
                                    </div>
                                    <div class="grow font-normal text-white code-font">
                                        info@furison.tech
                                    </div>
                                </div>

                                <hr class="opacity-50">

                                <div class="flex gap-4 py-2 items-center">
                                    <div class="flex-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                             class="w-6 fill-sky-400 text-sky-400 drop-shadow-current-extreme">
                                            <path d="m12 17 1-2V9.858c1.721-.447 3-2 3-3.858 0-2.206-1.794-4-4-4S8 3.794 8 6c0 1.858 1.279 3.411 3 3.858V15l1 2z"></path>
                                            <path d="m16.267 10.563-.533 1.928C18.325 13.207 20 14.584 20 16c0 1.892-3.285 4-8 4s-8-2.108-8-4c0-1.416 1.675-2.793 4.267-3.51l-.533-1.928C4.197 11.54 2 13.623 2 16c0 3.364 4.393 6 10 6s10-2.636 10-6c0-2.377-2.197-4.46-5.733-5.437z"></path>
                                        </svg>
                                    </div>
                                    <div class="grow font-normal text-white code-font">
                                        Holten, the Netherlands
                                    </div>
                                </div>

                                <hr class="opacity-50">

                                <div class="flex gap-4 pt-2 items-center">
                                    <div class="flex-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                             class="w-6 fill-teal-400 text-teal-400 drop-shadow-current-extreme">
                                            <path d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z"></path>
                                        </svg>
                                    </div>
                                    <div class="grow font-normal text-white code-font opacity-50">
                                        Unavailable
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
