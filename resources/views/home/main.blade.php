@extends('layouts.index')
@section('style')
    <link rel='stylesheet' href="{{ asset('css/home_main/content_container.css') }}">
@endsection
@section('title', $viewData['title'])

@section('content')
    <div class="home_container">

    <div class= 'border_full'> </div>

        <div class='home_container_header'>
            <!--<p> {{ $viewData['content'] }} <p>-->
            <div class="row_banner">
                @foreach ($viewData['products'] as $product)
                    <div class="box_banner."> 

                        <div class="card" > 
                            <a href="{{ route('product.show', ['id' => $product->id]) }}">
                                <img class="img_banner" src="{{ asset('storage' . $product->image) }}" alt="{{ $product->name }}" width="250">
                                    <div class="card-body">
                                        <h2 class='size_text_banner'>{{ $product->name }}</h2> 
                                            <p class='size_text_banner'>{{ $product->price }} VNĐ</p class='size_text_banner'> 
                                        @if ($product->discount_price)
                                            <div class="discount_tag">
                                                <p> {{ $product->discount_price }} </p>
                                            </div>
                                        @endif
                                        
                                </div>
                            </a>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>

    <div class= 'border_full'> </div>

        <div class='home_container_header'>
            <!--<p> {{ $viewData['content'] }} <p>-->
            <div class="row_banner">
                @foreach ($viewData['products'] as $product)
                    <div class="box_banner"> 

                        <div class="card bg-dark text-white"> 
                            <img class="img_banner" src="{{ asset('storage' . $product->image) }}" alt="{{ $product->name }}" width="250">
                                <div class="card-img-overlay">
                                    <h2 class='size_text_banner'>{{ $product->name }}</h2> 
                                    <p class='size_text_banner'>>{{ $product->price }} VNĐ</p class='size_text_banner'> <p> Giam Gia  {{ $product->discount_price }} </p>
                                </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('footer' , $viewData['footer'])