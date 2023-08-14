---
title: "Furison Tech"
description: "Software/Web Applications and Technologies. Innovation and Beyond!"
---

@extends('_layouts.main')

@section('body')
    @include('_layouts.index_slides.landing')
    @include('_layouts.index_slides.intro')
    @include('_layouts.index_slides.services')
    @include('_layouts.index_slides.bottom')

    @include('_layouts.scripts.slides_script')
@endsection
