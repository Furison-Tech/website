---
title: "Furison Tech"
description: "Software/Web Applications and Technologies. Innovation and Beyond!"
---

@extends('_layouts.main')

@section('body')
    <script>
        function isLessPowerfullDevice(requiredCores, requiredRam){
            let isLessPowerfull = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
            if (!isLessPowerfull && 'hardwareConcurrency' in navigator) {
                isLessPowerfull = navigator.hardwareConcurrency < requiredCores
            }
            if (!isLessPowerfull && 'deviceMemory' in navigator) {
                isLessPowerfull = navigator.deviceMemory < requiredRam
            }
            return isLessPowerfull
        }
        const limitAnimations = isLessPowerfullDevice(6, 8);

        let imagesLoaded = 0;
        let expectedImages = limitAnimations ? 1 : 14;
        function handleImageLoad(){
            imagesLoaded++;
            if (imagesLoaded===expectedImages){
                document.getElementById('parallax-scene').classList.remove('opacity-0');
            }
        }
    </script>

    @include('_layouts.index_slides.landing')
    @include('_layouts.index_slides.intro')
    @include('_layouts.index_slides.services')
    @include('_layouts.index_slides.bottom')

    <script>
        if (!limitAnimations){
            document.getElementById('parallax-scene').innerHTML = `@include('_layouts.index_slides.landing_scene.parallax')`;
        } else {
            document.getElementById('parallax-scene').innerHTML = `@include('_layouts.index_slides.landing_scene.no-parallax')`;
        }

        document.addEventListener('DOMContentLoaded', function (){
            if (!limitAnimations){
                let scene = document.getElementById('parallax-scene');
                let parallaxInstance = new Parallax(scene, {
                    relativeInput: true,
                    invertX: false,
                    invertY: false
                });
            }
        });
    </script>

    @include('_layouts.scripts.slides_script')
    @include('_layouts.scripts.index_script')

    <script>
        window.onunload = function () {
            setTimeout(function () {
                window.scrollTo(0, 0);
            }, 500);
        };
    </script>
@endsection
