@extends('master')

@section('css')
    <style>
        img.img-slide{
             height:400px !important;
        }   
        .custom-product{
            height:500px !important;
        }
        .carousel-caption{
            background-color: #4358426b;
        }
        .trending-img{
            height:100px;
        }
        .trending-item{
            float:left;
            width:20%;
        }
        .trending-wrapper{
            margin:30px;
        }
    </style>
@endsection
@section('content')
<div class="custom-product">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach ($data as $item)
                <div class="carousel-item {{ $item['id']==2? 'active':'' }}" data-bs-interval="10000">
                <img class="img-slide" src="{{ $item->gallery }}" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $item->name }}</h5>
                    <p>{{ $item->description }}</p>
                </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach ($data as $item)
            <div class="trending-item">
                <img class="trending-img" src="{{ $item->gallery }}" alt="">
                <div class="">
                    <p>{{ $item->name }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
 
@endsection
