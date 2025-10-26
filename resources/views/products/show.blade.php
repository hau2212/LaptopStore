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
                    <img class=img_product src="{{ asset('storage' . $viewData['products']->image) }}" alt="{{ $viewData['products']->name }}" width="300">     
                </div>
                <!-- Product Info -->
                <div class=right_product>
                    <div class=info_product>

                        <h4><strong> {{$viewData['products']->name }}</strong></h4>
                        <p class="description_product"> Description: {{$viewData['products']->description }} </p>
                        <div class="price_origin">
                            <p > Price: {{$viewData['products']->price }} VNĐ </p>
                        </div>

                        <div class="price_discount">
                            <p > Discount Price: {{$viewData['products']->discount_price }} VNĐ </p>
                        </div>
                        
                        <div class='stock_product'>
                            <p > Stock: {{$viewData['products']->stock }} </p>
                        </div>
                        
                        <div class="status_product">
                            <p  > Status: {{$viewData['products']->status }} </p>
                        </div>

                    </div>
                </div>
            </div>
        <!-- End Product Detail Section-->

    </div>
@endsection
@section('footer' , $viewData['footer'])