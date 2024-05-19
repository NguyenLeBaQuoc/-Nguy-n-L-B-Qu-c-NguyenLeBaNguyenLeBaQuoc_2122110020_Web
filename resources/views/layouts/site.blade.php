<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    {{-- <link rel="stylesheet" href="{{ asset('plugins/bootstrap-gird.css') }}"> --}}



    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/path/to/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body>
    <div>
        <section class="nlbq-header">
            <div class="container py-2">
                <div class="row">
                    <div class="col-md-2">
                        <a href="#">
                            <img class="img-fluid w-100" src="images/logo.webp" alt="logo">
                        </a>
                    </div>
                    <div class="col-md-5 pt-3 pl-2">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm..."
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </div>
                    <div class="col-md-2 d-none d-md-block pt-2">
                        <div class="row">
                            <div class="col-sm-2 fs-2">
                                <i class="fa-solid fa-mobile-screen"></i>
                            </div>
                            <div class="col-sm 10">
                                <p class="p-0 m-0">Tư vấn hỗ trợ</p>
                                <pc lass="p-0 m-0"><strong class="text-danger">1900 6750</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pt-1 text-center">
                        <div class="row">
                            <div class="col-4">
                                <a href="#">
                                    <p class="p-0 m-0 fs-5"><i class="fa-regular fa-user"></i></p>
                                    <p class="p-0 m-0"><strong>Đăng nhập</strong></p>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#">
                                    <p class="p-0 m-0 fs-5"><i class="fa-regular fa-heart"></i></p>
                                    <p class="p-0 m-0"><strong>Yêu thích</strong></p>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#">
                                    <p class="p-0 m-0 fs-5"><i class="fa-solid fa-bag-shopping"></i></p>
                                    <p class="p-0 m-0"><strong>Giỏ hàng</strong></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="nlbq-mainmenu navbar-light bg-light">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <li><a class="nav-link" href="{{ route('home') }}">Trang chủ</a></li>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="product" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sản phẩm
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="product">Tất cả sản phẩm</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Xu hướng
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Trang phục
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Phụ kiện
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Tin tức
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Câu
                                        hỏi</a>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact" tabindex="-1" aria-disabled="true">Liên
                                        hệ</a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>

    </div>
{{-- //kkkkkkkkkkkkkkkkkkkkkkkk --}}
    <main>
        @yield('content')
    </main>
{{-- kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk --}}

    <div>
        <section class="nlbq-footer bg-footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>CHÚNG TÔI LÀ AI ?</h4>
                        <p class="q">Copyright@ 2021 Công ty TNHH thời trang Ego Wear
                            Ego Wear đang trong giai đoạn phát triển mạnh với nhiều mặt hàng phong phú giá cả cạnh
                            tranh,
                            mong muốn đem đến chất lượng tốt nhất cho khách hàng.
                        </p>
                        <p class="q">
                            Địa chỉ: 221 Chùa Bộc, Đống Đa, Hà Nội, Hà Nội
                        </p>
                        <p class="q">
                            Điện thoại: 1900 6750 - Email: support@sapo.vn
                        </p>
                    </div>
                    <div class="col-md">
                        <h4>CHÍNH SÁCH</h4>
                        <ul class="menu">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Sản phẩm</a></li>
                            <li><a href="#">Xu hướng</a></li>
                            <li><a href="#">Trang phục</a></li>
                            <li><a href="#">Phụ kiện</a></li>
                            <li><a href="#">Tin tức</a></li>
                            <li><a href="#">Câu hỏi</a></li>
                            <li><a href="#">Liên hệ</a></li>

                        </ul>
                    </div>
                    <div class="col-md">
                        <h4>KHU BÁN HÀNG</h4>
                        <ul class="menu">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Sản phẩm</a></li>
                            <li><a href="#">Xu hướng</a></li>
                            <li><a href="#">Trang phục</a></li>
                            <li><a href="#">Phụ kiện</a></li>
                            <li><a href="#">Tin tức</a></li>
                            <li><a href="#">Câu hỏi</a></li>
                            <li><a href="#">Liên hệ</a></li>

                        </ul>
                    </div>
                    <div class="col-md">
                        <h4>HỖ TRỢ CHUNG</h4>
                        <ul class="menu">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Sản phẩm</a></li>
                            <li><a href="#">Xu hướng</a></li>
                            <li><a href="#">Trang phục</a></li>
                            <li><a href="#">Phụ kiện</a></li>
                            <li><a href="#">Tin tức</a></li>
                            <li><a href="#">Câu hỏi</a></li>
                            <li><a href="#">Liên hệ</a></li>

                        </ul>
                    </div>
                </div>
        </section>
        <section class="nlbq-copyright bg-footer ">
            <div class="container border-top py-3">
                <div class="row">
                    <div class="col-6">
                        <span class="og">Bản quyền thuộc về</span>
                        <span style="font-weight: bold;">Thái Tử Phú Yên. </span>
                        <span class="og">Cung cấp bởi</span>
                        <span style="font-weight: bold;">Nguyễn Lê Bá Quốc</span>
                    </div>

                    <div class="col-6 text-end">
                        <ul class="nav">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Sản phẩm</a></li>
                            <li><a href="#">Xu hướng</a></li>
                            <li><a href="#">Trang phục</a></li>
                            <li><a href="#">Phụ kiện</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @yield('footer')
</body>

</html>
