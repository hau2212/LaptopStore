@extends('layouts.index')
@section('style')
    <link rel='stylesheet' href="{{ asset('css/product/product_show.css') }}">
@endsection
@section('title', $viewData['title'])
@section('content')
    <div class="product_show">
        <div class="content_product"><p> Detail Product </p></div>
        <!-- Product Detail Section -->
            <div class='container_product'>
                <!-- Product Image -->
                <div class=left_product>
                    <img class=img_product src="{{ asset('storage/' . $viewData['products']->image) }}" alt="{{ $viewData['products']->name }}" width="300">     
                </div>
                <!-- Product Info -->
                <div class=right_product>
                    <div class=info_product>

                        <h4><strong> {{$viewData['products']->name }}</strong></h4>
                        <p class="description_product"> Description: {{$viewData['products']->description }} </p>
                        <p class="price_product"> Price: {{$viewData['products']->price }} VNĐ </p>
                        <p class="discount_product"> Discount Price: {{$viewData['products']->discount_price }} VNĐ </p>
                        <p class="stock_product"> Stock: {{$viewData['products']->stock }} </p>
                        <p class="category_product"> Category: {{$viewData['products']->category }} </p>
                        <p 


                    </div>
                </div>
            </div>
        <!-- End Product Detail Section-->

    </div>
@endsection
@section('footer' , $viewData['footer'])