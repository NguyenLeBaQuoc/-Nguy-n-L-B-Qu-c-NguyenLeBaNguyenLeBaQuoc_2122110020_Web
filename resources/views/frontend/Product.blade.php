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
                            <div class="col-md">
                                <div class="product-item">
                                    <div class="product-item">
                                        <a href="product-detail">
                                        <img class="img-fluid" src="images/ao-cup-nguc.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-name">
                                        <h4 class="fs-5 py-1">ÁO POLO PHỐI KHÓA CỔ</h4>
                                    </div>
                                    <div class="product-price">
                                        <div class="row">
                                            <div class="col-6">
                                                <strong class="text-danger fs-5">399.000 <sup>đ</sup></strong>
                                            </div>
                                            <div class="col-6 text-end">
                                                <del>460.000 <sup>đ</sup></del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-hearth-eye my-2">
                                        <div class="row">
                                            <div class="col-8">
                                                <a class="btn btn-sm btn-success form-control">Thêm vào giỏ hàng</a>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-sm btn-info">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-sm btn-info">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="product-item">
                                    <div class="product-item">
                                        <a href="product-detail">
                                        <img class="img-fluid" src="images/dongu-namnu.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-name">
                                        <h4 class="fs-5 py-1">ĐẦM COTTON CAO CẤP</h4>
                                    </div>
                                    <div class="product-price">
                                        <div class="row">
                                            <div class="col-6">
                                                <strong class="text-danger fs-5">360.000 <sup>đ</sup></strong>
                                            </div>
                                            <div class="col-6 text-end">
                                                <del>550.000 <sup>đ</sup></del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-hearth-eye my-2">
                                        <div class="row">
                                            <div class="col-8">
                                                <a class="btn btn-sm btn-success form-control">Thêm vào giỏ hàng</a>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-sm btn-info">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-sm btn-info">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="product-item">
                                    <div class="product-item">
                                        <a href="product-detail">
                                        <img class="img-fluid" src="images/chan-vay.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-name">
                                        <h4 class="fs-5 py-1">ÁO PHÔNG CỘC TAY</h4>
                                    </div>
                                    <div class="product-price">
                                        <div class="row">
                                            <div class="col-6">
                                                <strong class="text-danger fs-5">360.000 <sup>đ</sup></strong>
                                            </div>
                                            <div class="col-6 text-end">
                                                <del>460.000 <sup>đ</sup></del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-hearth-eye my-2">
                                        <div class="row">
                                            <div class="col-8">
                                                <a class="btn btn-sm btn-success form-control">Thêm vào giỏ hàng</a>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-sm btn-info">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-sm btn-info">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="product-item">
                                    <div class="product-item">
                                        <a href="product-detail">
                                        <img class="img-fluid" src="images/ao-dai.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-name">
                                        <h4 class="fs-5 py-1">ÁO SƠ MI NGẮN TAY</h4>
                                    </div>
                                    <div class="product-price">
                                        <div class="row">
                                            <div class="col-6">
                                                <strong class="text-danger fs-5">180.000 <sup>đ</sup></strong>
                                            </div>
                                            <div class="col-6 text-end">
                                                <del>180.000 <sup>đ</sup></del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-hearth-eye my-2">
                                        <div class="row">
                                            <div class="col-8">
                                                <a class="btn btn-sm btn-success form-control">Thêm vào giỏ hàng</a>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-sm btn-info">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-sm btn-info">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="product-item">
                                    <div class="product-item">
                                        <img class="img-fluid" src="images/ao-cup-nguc.jpg" alt="">
                                    </div>
                                    <div class="product-name">
                                        <h4 class="fs-5 py-1">ÁO THUN UNISEX</h4>
                                    </div>
                                    <div class="product-price">
                                        <div class="row">
                                            <div class="col-6">
                                                <strong class="text-danger fs-5">120.000 <sup>đ</sup></strong>
                                            </div>
                                            <div class="col-6 text-end">
                                                <del>120.000 <sup>đ</sup></del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-cart-hearth-eye my-2">
                                        <div class="row">
                                            <div class="col-8">
                                                <a class="btn btn-sm btn-success form-control">Thêm vào giỏ hàng</a>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-sm btn-info">
                                                    <i class="fa-regular fa-heart"></i>
                                                </button>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-sm btn-info">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>MẪU MỚI VỀ</h3>
                    <div class="row">
                        <div class="col-md">
                            <div class="product-item">
                                <div class="product-item">
                                    <img class="img-fluid" src="images/ao-cup-nguc.jpg" alt="">
                                </div>
                                <div class="product-name">
                                    <h4 class="fs-5 py-1">ÁO POLO PHỐI KHÓA CỔ</h4>
                                </div>
                                <div class="product-price">
                                    <div class="row">
                                        <div class="col-6">
                                            <strong class="text-danger fs-5">399.000 <sup>đ</sup></strong>
                                        </div>
                                        <div class="col-6 text-end">
                                            <del>460.000 <sup>đ</sup></del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-hearth-eye my-2">
                                    <div class="row">
                                        <div class="col-8">
                                            <a class="btn btn-sm btn-success form-control">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-sm btn-info">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-sm btn-info">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="product-item">
                                <div class="product-item">
                                    <img class="img-fluid" src="images/dongu-namnu.jpg" alt="">
                                </div>
                                <div class="product-name">
                                    <h4 class="fs-5 py-1">ĐẦM COTTON CAO CẤP</h4>
                                </div>
                                <div class="product-price">
                                    <div class="row">
                                        <div class="col-6">
                                            <strong class="text-danger fs-5">360.000 <sup>đ</sup></strong>
                                        </div>
                                        <div class="col-6 text-end">
                                            <del>550.000 <sup>đ</sup></del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-hearth-eye my-2">
                                    <div class="row">
                                        <div class="col-8">
                                            <a class="btn btn-sm btn-success form-control">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-sm btn-info">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-sm btn-info">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="product-item">
                                <div class="product-item">
                                    <img class="img-fluid" src="images/chan-vay.jpg" alt="">
                                </div>
                                <div class="product-name">
                                    <h4 class="fs-5 py-1">ÁO PHÔNG CỘC TAY</h4>
                                </div>
                                <div class="product-price">
                                    <div class="row">
                                        <div class="col-6">
                                            <strong class="text-danger fs-5">360.000 <sup>đ</sup></strong>
                                        </div>
                                        <div class="col-6 text-end">
                                            <del>460.000 <sup>đ</sup></del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-hearth-eye my-2">
                                    <div class="row">
                                        <div class="col-8">
                                            <a class="btn btn-sm btn-success form-control">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-sm btn-info">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-sm btn-info">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="product-item">
                                <div class="product-item">
                                    <img class="img-fluid" src="images/ao-dai.jpg" alt="">
                                </div>
                                <div class="product-name">
                                    <h4 class="fs-5 py-1">ÁO SƠ MI NGẮN TAY</h4>
                                </div>
                                <div class="product-price">
                                    <div class="row">
                                        <div class="col-6">
                                            <strong class="text-danger fs-5">180.000 <sup>đ</sup></strong>
                                        </div>
                                        <div class="col-6 text-end">
                                            <del>180.000 <sup>đ</sup></del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-hearth-eye my-2">
                                    <div class="row">
                                        <div class="col-8">
                                            <a class="btn btn-sm btn-success form-control">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-sm btn-info">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-sm btn-info">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="product-item">
                                <div class="product-item">
                                    <img class="img-fluid" src="images/ao-cup-nguc.jpg" alt="">
                                </div>
                                <div class="product-name">
                                    <h4 class="fs-5 py-1">ÁO THUN UNISEX</h4>
                                </div>
                                <div class="product-price">
                                    <div class="row">
                                        <div class="col-6">
                                            <strong class="text-danger fs-5">120.000 <sup>đ</sup></strong>
                                        </div>
                                        <div class="col-6 text-end">
                                            <del>120.000 <sup>đ</sup></del>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart-hearth-eye my-2">
                                    <div class="row">
                                        <div class="col-8">
                                            <a class="btn btn-sm btn-success form-control">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-sm btn-info">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-sm btn-info">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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