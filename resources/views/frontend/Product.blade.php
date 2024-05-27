@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
  

<div>
    <main>
        <section class="product-listing">
          <div class="container">
            <div class="filter-sort">
              <select id="filter-by">
                <option value="all">Tất cả sản phẩm</option>
                <option value="category1">Danh mục 1</option>
                <option value="category2">Danh mục 2</option>
              </select>
              <select id="sort-by">
                <option value="name-asc">Tên (A-Z)</option>
                <option value="name-desc">Tên (Z-A)</option>
                <option value="price-asc">Giá (Thấp-Cao)</option>
                <option value="price-desc">Giá (Cao-Thấp)</option>
              </select>
              <div class="view-type">
                <button id="list-view-btn" class="active">Kiểu Danh Sách</button>
                <button id="grid-view-btn" class="active">Kiểu Lưới</button>
              </div>
            </div>
    
            <div id="product-card-container" class="row">
                <section class="nlbq-maincontent">
                <div class="container my-5">
                    <div class="container my-5">
                        <h3>MẪU MỚI VỀ</h3>
                        <div class="row">
                            <x-productcard/>
                            <x-productcard/>
                            <x-productcard/>
                            <x-productcard/>
                            <x-productcard/>

                        </div>
                    </div>
                    <h3>MẪU MỚI VỀ</h3>
                    <div class="row">
                        <x-productcard/>
                        <x-productcard/>
                        <x-productcard/>
                        <x-productcard/>
                        <x-productcard/>

                            
                        </div>
                    </div>
                </div>
            </section>
                
              </div>
          </div>
        </section>
      </main>
</div>


@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection