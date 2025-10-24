@extends('layouts.index')
@section('style')
    <link rel='stylesheet' href="{{ asset('css/product/product_show.css') }}">
@endsection
@section('title', $viewData['title'])
@section('content')
    <div class="product_show">
        <div class="content_product"><p> Detail Product </p></div>
        <!-- Product Detail Section -->
            
        <!-- End Product Detail Section-->

    </div>
@endsection
@section('footer' , $viewData['footer'])