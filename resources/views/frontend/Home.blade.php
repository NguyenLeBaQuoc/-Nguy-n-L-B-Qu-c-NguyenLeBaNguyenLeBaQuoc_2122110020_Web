@extends('layouts.site')
@section('title', 'Trang Chủ')
@section('content')



    <div>


        <section class="nlbq-maincontent">
            <div class="slider"></div>
<x-slider/>
          
    </div>
    <div class="container my-5">
        <h3>MẪU MỚI VỀ</h3>
        <div class="row">
                <x-productcard/>
                <x-productcard/>
                <x-productcard/>
                <x-productcard/>
                <x-productcard/>
0
        </div>
    </div>
    <div class="container my-5">
        <h3>SALE ĐỒNG GIÁ</h3>
        <div class="row">
            <x-productcard/>
            <x-productcard/>
            <x-productcard/>
            <x-productcard/>
            <x-productcard/>

        </div>
    </div>
    <div class="container my-5">
        <h3>ĐỒ NGỦ ĐẸP</h3>
        <div class="row">
            <x-productcard/>
            <x-productcard/>
            <x-productcard/>
            <x-productcard/>
            <x-productcard/>

        </div>
    </div>
    <div class="container mb-4">
        <h3 class="text-center">TIN TỨC MỚI NHẤT</h3>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid w-100" src="images/ao-cup-nguc.jpg" alt="">
                <h6>15/08/2021 - bởi: Ego Creative</h6>
                <h3 class="ct">Tiêu đề nội dung</h3>
                <p>Nội dung nội dung nội dung nội dung nội dung nội dung nội dung nội dung nội dung nội dung</p>
            </div>
            <div class="col-md-6">
           
                <x-postcard/>
                <x-postcard/>
                <x-postcard/>

            </div>
        </div>
    </div>
    </section>
    </div>

@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
