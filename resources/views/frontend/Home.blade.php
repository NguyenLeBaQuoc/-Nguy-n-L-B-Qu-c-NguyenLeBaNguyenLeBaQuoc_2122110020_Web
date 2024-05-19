@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')

    <div>


        <section class="nlbq-maincontent">
            <div class="slider"></div>

            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slider_1.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider_1.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider_1.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </div>
    <div class="container my-5">
        <h3>MẪU MỚI VỀ</h3>
        <div class="row">
            <div class="col-md">
                <div class="product-item">
                    <div class="product-item">
                        <a href="product-detail">


                            <img class="img-fluid" src="images/ao-cup-nguc.jpg" alt=""> </a>
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
    <div class="container my-5">
        <h3>SALE ĐỒNG GIÁ</h3>
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
    <div class="container my-5">
        <h3>ĐỒ NGỦ ĐẸP</h3>
        <div class="row">
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
                                <strong class="text-danger fs-5">200.000 <sup>đ</sup></strong>
                            </div>
                            <div class="col-6 text-end">
                                <del>200.000 <sup>đ</sup></del>
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
                                <strong class="text-danger fs-5">200.000 <sup>đ</sup></strong>
                            </div>
                            <div class="col-6 text-end">
                                <del>200.000 <sup>đ</sup></del>
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
                                <strong class="text-danger fs-5">200.000 <sup>đ</sup></strong>
                            </div>
                            <div class="col-6 text-end">
                                <del>200.000 <sup>đ</sup></del>
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
                                <strong class="text-danger fs-5">200.000 <sup>đ</sup></strong>
                            </div>
                            <div class="col-6 text-end">
                                <del>200.000 <sup>đ</sup></del>
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
                                <strong class="text-danger fs-5">200.000 <sup>đ</sup></strong>
                            </div>
                            <div class="col-6 text-end">
                                <del>200.000 <sup>đ</sup></del>
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
                <div class="row mb-2">
                    <div class="col-5">
                        <img class="img-fluid w-100" src="images/chan-vay.jpg" alt="">
                    </div>
                    <div class="col-7">
                        <h6>15/08/2021 - bởi: Ego Creative</h6>
                        <h4 class="ct">8 mẹo giúp bạn chọn quần jean trong mơ mà không cần đến shop</h4>
                        <p>Để biết được quần jean có vừa với mình hay không theo kích cỡ,
                            bạn không cần phải đứng xếp hàng trong
                        </p>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-5">
                        <img class="img-fluid w-100" src="images/quan-ong-rong1.jpg" alt="">
                    </div>
                    <div class="col-7">
                        <h6>15/08/2021 - bởi: Ego Creative</h6>
                        <h4 class="ct">Học lỏm 10 bí quyết từ các stylist hàng đầu để mặc đẹp mà không tốn</h4>
                        <p>1. Nếu bạn muốn chân trông dài hơn, hãy mang một đôi guốc cùng màu da của mình.
                            Chúng đánh lừa thị giác khiến bạn trông thanh mảnh và cao hơn. 2. Cách
                        </p>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-5">
                        <img class="img-fluid w-100" src="images/ao-cup-nguc.jpg" alt="">
                    </div>
                    <div class="col-7">
                        <h6>15/08/2021 - bởi: Ego Creative</h6>
                        <h4 class="ct">Một cô nàng ăn mặc chất, ngoài khả năng bắt trend còn tuân thủ 4</h4>
                        <p>Những bộ đồ ôm sát body giúp tôn lên đường cong nhưng mặc một
                            chiếc đầm bó chật quá mức hoặc chiếc quần jeans siêu skinny với mong muốn khoe
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </section>
    </div>

@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
