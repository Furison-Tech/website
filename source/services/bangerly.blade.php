---
title: "Furison Tech ⋅ About Bangerly"
description: "Learn more about the bangerly service."
---

@extends('_layouts.main')

@section('body')

    <div class="absolute w-screen h-screen">
        <div class="relative w-screen h-screen">
            <img class="relative w-screen h-full object-cover object-bottom" style="z-index: 1"
                 src="/assets/images/dronecity.jpg" alt="drone in city AI generated">
            <div class="absolute top-0 w-screen h-screen"
                 style="background: linear-gradient(to top, #0c1929 33%, rgba(12,25,41,0.25)); z-index: 2"></div>
            <img class="w-screen fixed h-full object-cover object-top" style="z-index: 0; top: 0;"
                 src="/assets/images/tablet.jpg" alt="business man on tablet AI generated">
        </div>
    </div>


    <div class="relative" style="z-index: 3">
        <div class="flex min-h-screen">
            <div class="inline-block mt-[107px] w-fit mx-auto px-4 pb-32">

                <div class="w-16 md:w-24 lg:w-36 mx-auto overflow-visible flex-none"
                     style="margin-top: calc(8vw + 8vh)">
                    <div class="block spinIn duration-1250 animation-forwards mb-12">
                        <img class="rounded-md w-full"
                             src="/assets/images/appicons/bangerly.jfif" alt="bangerly.com logo">
                    </div>
                </div>

                <h1 class="text-center text-3xl md:text-5xl lg:text-7xl font-black text-white
                fadeInBottom duration-1000">
                    About Bangerly.com
                </h1>

                <p class="text-white text-xs sm:text-sm md:text-base lg:text-lg font-normal mt-12 fadeInBottom duration-1000"
                   style="width: min-content; min-width: 100%; text-align:justify;">
                    Music production technology has been on quite the journey, and we've come a long way since the days of Jim Morrison and The Doors.
                    Like, who knew we'd come so far? Jim. Jim did know we'd come so far. He's just THAT guy.
                    Back in '69, Jim Morrison hinted that the future would be all about machines making music.
                    Fast forward to today, and with a modest budget, your home computer can be transformed into a mini music studio.
                    Who needs friends anyway when you've got synths, right? Platforms have sprung up everywhere,
                    catering to every musical need from sharing samples to mastering the art through tutorials.
                    And now? AI's stepping into the spotlight, with online platforms offering futuristic services like AI mastering.
                    <br><br>
                    But, theres is a problem in this market. Many of these platforms are like those all-you-can-eat buffets that only serve salad.
                    Often they only offer a single feature, for example sharing samples. Some of these services are free, others are paid.
                    That is where <a href="https://bangerly.com" class="code-font underline decoration-sky-500 underline-offset-4">bangerly</a> comes in.
                    Think of Bangerly as your one-stop-shop for all things music production, or better said the entire mall.
                    From samples to complete sample packs, MIDI files to synth presets, Networking statistics to nifty AI tools. Yup, we got the goods!
                    And the cost? Let's just say it won't have you living on instant noodles like the other platforms, with some features even for (partly) free, so don't worry!.
                    <br><br>
                    So, Which features are done and which aren't? As said, Bangerly is a unique platform that provides a library of audio samples for music enthusiasts.
                    That same library is built by the community, as artists can upload samples, and download others.
                    Artist can view statistics about their downloads, likes and profile clicks, so they can monitor to process of building a network with other producers.
                    What truly sets Bangerly apart is its commitment to fostering a community. As described earlier, the goal is to bring multiple topics of music production together in one platform, for the fraction of the price of its competitors that only cover 1 topic.
                    It's not just about downloading samples; it's about sharing, creating, and growing together.
                    <br><br>
                    Now, let's be real, Bangerly is still a baby. It's our debut app!
                    Lots of the features are still in the lab, such as AI vocal separation,
                    AI sample generation and the ability for artists to sell their own samplepack.
                </p>

            </div>

        </div>

        <div class="absolute w-full"
             style="top: 100vh; z-index: -2; height: calc(100% - 100vh); background-color: rgba(12,25,41,0.55);
                    background-image: linear-gradient(#0c1929 33%, rgba(12,25,41,0.25));">
        </div>
    </div>

    <div class="h-[6px] overflow-hidden relative" style="background: #050c13; z-index: 4;">
        <span class="block w-[80px] h-[6px] bg-gradient-to-r light-sweep duration-8000
        from-indigo-400 via-sky-400 to-teal-400"></span>
    </div>

    <div class="relative overflow-hidden bg-0c1929">
        <div class="container mx-auto px-12 relative mb-[236px] sm:mb-[223px] md:mb-[187px] xl:mb-[219px] pt-32">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <img class="w-full object-cover block rounded" alt="bangerly community content screen"
                     src="/assets/images/services/bangerly/screen3.jfif">

                <div class="text-white">
                    <p class="font-bold text-md lg:text-xl text-center md:text-left">Sharing Samples, Presets and Melodies</p>
                    <p class="font-normal mt-4 text-justify md:text-left">
                        As with most sample library platforms, a user can search for a sample or artist.
                        But with our platform, an artist that optionally uploads a sample can attach a MIDI file
                        (a type of file that basically contains a melody, that a DAW can use to put another synth over).
                        The artist can also optionally attach a synth preset file (so that the sound is reproducable and adjustable).
                        Although this is a small extra feature, it sure leaves artists with more resources to produce their tracks.
                    </p>
                </div>
            </div>

            <hr class="opacity-50 my-16">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <div class="text-white">
                    <p class="font-bold text-md lg:text-xl text-center md:text-left">Networking & Audience statistics</p>
                    <p class="font-normal mt-4 text-justify md:text-left">
                        An artists can see his popularity chart,
                        what kind of his samples are downloaded/liked the most, and how many people click on which of his social media accounts.
                        Artists can also chat with each other. These features may not be the core topic of the app, but it is important so that different producers
                        can collaborate and build a network with each other.
                    </p>
                </div>

                <img class="w-full object-cover block rounded order-first md:order-last" alt="bangerly profile screen"
                     src="/assets/images/services/bangerly/screen2.jfif">
            </div>

            <hr class="opacity-50 my-16">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <img class="w-full object-cover block rounded" alt="bangerly sample pack screen"
                     src="/assets/images/services/bangerly/screen1.jfif">

                <div class="text-white">
                    <p class="font-bold text-md lg:text-xl text-center md:text-left">Complete Sample Pack</p>
                    <p class="font-normal mt-4 text-justify md:text-left">
                        Besides individual samples, Bangerly hosts complete sample packs that users can download.
                        Sample Packs are more popular for the at-home producer, and sometimes an artist does not want to give away his/her samples for free.
                        That's why we give artists the ability to sell their sample packs on our platform.
                    </p>
                </div>
            </div>

            <hr class="opacity-50 my-16">

            <small class="block text-white/50 w-fit mx-auto">
                Images/Videos Designed by <a target="_blank" referrerpolicy="no-referrer" href="https://freepik.com">Freepik</a>
            </small>

        </div>
    </div>

@endsection