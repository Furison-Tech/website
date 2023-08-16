---
title: "Furison Tech"
description: "Software/Web Applications and Technologies. Innovation and Beyond!"
---

@extends('_layouts.main')

@section('body')
    <script>
        let imagesLoaded = 0;

        function handleImageLoad(){
            imagesLoaded++;

            if (imagesLoaded===14){
                document.getElementById('parallax-scene').classList.remove('opacity-0');
            }
        }

        function isLessPowerfullDevice(requiredCores){
            let isLessPowerfull = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
            if (!isLessPowerfull) {
                isLessPowerfull = (('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0));
            }
            if (!isLessPowerfull <= 2) {
                isLessPowerfull = navigator.hardwareConcurrency < requiredCores
            }
            return isLessPowerfull
        }

        const limitAnimations = isLessPowerfullDevice(6);
    </script>

    @include('_layouts.index_slides.landing')

    <script>
        document.getElementById('landing-slide').classList.add(limitAnimations ? 'relative' : 'absolute');

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

    @include('scripts.slides_script')
    @include('scripts.index_script')

    <script>
        window.scrollTo(0, 0);
    </script>
@endsection
