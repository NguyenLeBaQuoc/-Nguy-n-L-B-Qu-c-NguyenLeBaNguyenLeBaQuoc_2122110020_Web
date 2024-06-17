@extends('layouts.admin')
@section('title', 'Trang Chủ')
@section('content')
@if (session('success'))
    <div id="success-message" class="alert alert-success" style="color: black; font-size: 20px;">
        {{ session('success') }}
    </div>
@endif

<script>
    // Function to hide alerts after a timeout
    function hideAlerts() {
        var successAlert = document.getElementById('success-message');
        var errorAlert = document.getElementById('error-message');

        if (successAlert) {
            setTimeout(function() {
                successAlert.style.display = 'none';
            }, 5000); // 5 seconds
        }
    }

    // Call the hideAlerts function when the page is loaded
    document.addEventListener('DOMContentLoaded', function() {
        hideAlerts();
    });
</script>
<div>
    @if (session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}

    </div>
    @endif

    <script>
        // Hàm để ẩn thông báo sau 3 giây
        function hideAlerts() {
            var successAlert = document.getElementById('success-message');
            var errorAlert = document.getElementById('error-message');

            if (successAlert) {
                setTimeout(function() {
                    successAlert.style.display = 'none';
                }, 2000);
            }
        }

        // Gọi hàm ẩn thông báo khi trang được tải
        document.addEventListener('DOMContentLoaded', function() {
            hideAlerts();
        });

    </script>
    <form action="{{ route('admin.menu.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
            <!-- CONTENT -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Tất cả menu</h1>
                            {{-- <a class="btn btn-sm btn-primary" href="{{ route('admin.menu.create') }}"> --}}
                            {{-- <i class="fas fa-plus"></i> Thêm menu
                            </a> --}}
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href=" ">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a class="btn btn-sm btn-danger" href="{{ route('admin.menu.trash') }}">
                                    <i class="fas fa-trash"></i> Thùng rác
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="accordion" id="accordionExample">
                                    <div class="card p-3">
                                        <label for="postion">Vị trí</label>
                                        <select name="postion" id="postion" class="form-control">
                                            <option value="2">Chưa xuất bản</option>
                                            <option value="1">Xuất bản</option>
                                        </select>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingCategory">
                                            <a class="d-block" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
                                                Danh mục
                                            </a>

                                        </div>
                                        <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionExample">
                                            <div class="card-body">
                                                @foreach($categorys as $category)
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="categoryId">
                                                    <label class="form-check-label" for="categoryId">
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    </label>
                </div>
                @endforeach
                <div class="mb-3">
                    <button type="submit" name="createCategory" class="btn btn-success">Thêm menu</button>
                </div>
        </div>
</div>
</div>
<!-- end card -->
<div class="card">
    <div class="card-header" id="headingBrand">
        <a class="d-block" data-toggle="collapse" data-target="#collapseBrand" aria-expanded="true" aria-controls="collapseBrand">
            Thuong hiệu
        </a>
    </div>

    <div id="collapseBrand" class="collapse" aria-labelledby="headingBrand" data-parent="#accordionExample">
        <div class="card-body">
            @foreach($brands as $brand)
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="brandId">
                <label class="form-check-label" for="brandId">

                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>

                </label>
            </div>
            @endforeach
            <div class="mb-3">
                <button type="submit" name="createBrand" class="btn btn-success">Thêm menu</button>
            </div>
        </div>
    </div>
</div>
<!-- end card -->
<div class="card">
    <div class="card-header" id="headingTopic">
        <a class="d-block" data-toggle="collapse" data-target="#collapseTopic" aria-expanded="true" aria-controls="collapseTopic">
            Chủ đề
        </a>
    </div>
    <div id="collapseTopic" class="collapse" aria-labelledby="headingTopic" data-parent="#accordionExample">
        <div class="card-body">
            @foreach($topics as $topic)
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="topicId">
                <label class="form-check-label" for="topicId">
                    <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                </label>
            </div>
            @endforeach
            <div class="mb-3">
                <button type="submit" name="createTopic" class="btn btn-success">Thêm menu</button>
            </div>
        </div>
    </div>
</div>
<!-- end card -->
<div class="card">
    <div class="card-header" id="headingPage">
        <a class="d-block" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
            Trang đơn
        </a>
    </div>
    <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionExample">
        <div class="card-body">
            @foreach($posts as $post)
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="pageId">
                <label class="form-check-label" for="pageId">
                    <option value="{{ $post->id }}">{{ $post->title }}</option>
                </label>
            </div>
            @endforeach
            <div class="mb-3">
                <button type="submit" name="createPage" class="btn btn-success">Thêm menu</button>
            </div>
        </div>
    </div>
</div>
<!-- end card -->
<div class="card">
    <div class="card-header" id="headingCustom">
        <a class="d-block" data-toggle="collapse" data-target="#collapseCustom" aria-expanded="true" aria-controls="collapseCustom">
            Tùy liên kết
        </a>
    </div>
    <div id="collapseCustom" class="collapse" aria-labelledby="headingCustom" data-parent="#accordionExample">
        <div class="card-body">
            <div class="mb-3">
                <label for="name">Tên menu</label>
                <input type="text" value="" name="name" id="name" class="form-control">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="link">Liên kết</label>
                <input type="text" value="" name="link" id="link" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" name="createCustom" class="btn btn-success">Thêm menu</button>
            </div>
        </div>
    </div>
</div>
<!-- end card -->
<div class="card p-3">
    <label for="status">Trạng thái</label>
    <select name="status" id="status" class="form-control">
        <option value="2">Chưa xuất bản</option>
        <option value="1">Xuất bản</option>
    </select>
</div>
</div>

</div>

<div class="col-md-8">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th class="text-center" style="width:30px">#</th>
                <th class="text-center" style="width:90px">Hình</th>
                <th>Tên danh mục</th>
                <th>slug</th>
                <th class="text-center" style="width:190px">Chức năng</th>
                <th class="text-center" style="width:30px">ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $row)
            <tr>
                @php
                $args=['id'=>$row->id]
                @endphp
                <td class="text-center">
                    <input type="checkbox" name="checkID[]" id="checkID">
                </td>
                <td>
                    {{ $row->name}}
                </td>
                <td>
                    {{ $row->link}}
                </td>
                <td class="text-center">
                    @if ($row->status==1)
                    <a href="{{ route('admin.category.status',$args) }}" class="btn btn-sm btn-success">
                        <i class="fas fa-toggle-on"></i>
                    </a>
                    @else
                    <a href="{{ route('admin.category.status',$args) }}" class="btn btn-sm btn-danger">
                        <i class="fas fa-toggle-off"></i>
                    </a>
                    @endif
                    <a href="{{ route('admin.menu.show',$args) }}" class="btn btn-sm btn-info">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('admin.menu.edit',$args) }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="{{ route('admin.menu.delete',$args) }}" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
                <td class="text-center">
                    {{ $row->id }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div> --}}
<div class="card-body">
    <div class="row">
        <div class="col-md-4">
            <div class="accordion" id="accordionExample">
                <div class="card p-3">
                    <label for="position">Vị trí</label>
                    <select name="position" id="position" class="form-control" required>
                        <option value="mainmenu">Main Menu</option>
                        <option value="footermenu">Footer Menu</option>
                    </select>
                </div>

                <div class="card">
                    <div class="card-header" id="headingCategory">
                        <a class="d-block" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
                            Danh mục
                        </a>
                    </div>
                    <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionExample">
                        <div class="card-body">
                            @foreach($categories as $category)
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="categories[]" value="{{ $category->id }}" id="categoryId{{ $category->id }}">
                                <label class="form-check-label" for="categoryId{{ $category->id }}">
                                    {{ $category->name }}
                                </label>
                            </div>
                            @endforeach
                            <div class="mb-3">
                                <button type="submit" name="createCategory" class="btn btn-success">Thêm menu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header" id="headingBrand">
                        <a class="d-block" data-toggle="collapse" data-target="#collapseBrand" aria-expanded="true" aria-controls="collapseBrand">
                            Thương hiệu
                        </a>
                    </div>
                    <div id="collapseBrand" class="collapse" aria-labelledby="headingBrand" data-parent="#accordionExample">
                        <div class="card-body">
                            @foreach($brands as $brand)
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="brands[]" value="{{ $brand->id }}" id="brandId{{ $brand->id }}">
                                <label class="form-check-label" for="brandId{{ $brand->id }}">
                                    {{ $brand->name }}
                                </label>
                            </div>
                            @endforeach
                            <div class="mb-3">
                                <button type="submit" name="createBrand" class="btn btn-success">Thêm menu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header" id="headingTopic">
                        <a class="d-block" data-toggle="collapse" data-target="#collapseTopic" aria-expanded="true" aria-controls="collapseTopic">
                            Chủ đề
                        </a>
                    </div>
                    <div id="collapseTopic" class="collapse" aria-labelledby="headingTopic" data-parent="#accordionExample">
                        <div class="card-body">
                            @foreach($topics as $topic)
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="topics[]" value="{{ $topic->id }}" id="topicId{{ $topic->id }}">
                                <label class="form-check-label" for="topicId{{ $topic->id }}">
                                    {{ $topic->name }}
                                </label>
                            </div>
                            @endforeach
                            <div class="mb-3">
                                <button type="submit" name="createTopic" class="btn btn-success">Thêm menu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header" id="headingPage">
                        <a class="d-block" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
                            Trang đơn
                        </a>
                    </div>
                    <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionExample">
                        <div class="card-body">
                            @foreach($pages as $page)
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="pages[]" value="{{ $page->id }}" id="pageId{{ $page->id }}">
                                <label class="form-check-label" for="pageId{{ $page->id }}">
                                    {{ $page->title }}
                                </label>
                            </div>
                            @endforeach
                            <div class="mb-3">
                                <button type="submit" name="createPage" class="btn btn-success">Thêm menu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header" id="headingCustom">
                        <a class="d-block" data-toggle="collapse" data-target="#collapseCustom" aria-expanded="true" aria-controls="collapseCustom">
                            Tùy liên kết
                        </a>
                    </div>
                    <div id="collapseCustom" class="collapse" aria-labelledby="headingCustom" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name">Tên menu</label>
                                <input type="text" name="name" id="name" class="form-control">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="link">Liên kết</label>
                                <input type="text" name="link" id="link" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="createCustom" class="btn btn-success">Thêm menu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="card p-3">
                    <label for="status">Trạng thái</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="2">Chưa xuất bản</option>
                        <option value="1">Xuất bản</option>
                    </select>
                </div>
            </div>
            </form>
        </div>


        <div class="col-md-8">

            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-center" style="width:30px">#</th>

                        <th class="text-center">Tên Menu</th>
                        <th class="text-center">Liên kết</th>
                        <th class="text-center">Vị trí</th>

                        <th class="text-center" style="width:140px">Chức năng</th>
                        <th class="text-center" style="width:30px">ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $row)
                    @php
                    $args=['id'=>$row->id];
                    @endphp
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" name="checkID[]" id="checkID" value="{{ $row->id }}">
                        </td>

                        <td>{{ $row->name }}</td>
                        <td>{{ $row->link }}</td>
                        <td>{{ $row->position }}</td>


                        <td class="text-center">
                            @if ($row->status == 1)
                            <a href="{{ route('admin.menu.status',$args) }}" class="btn btn-success btn-xs">
                                <i class="fas fa-toggle-on"></i>
                            </a>
                            @else
                            <a href="{{ route('admin.menu.status', $args) }}" class="btn btn-danger btn-xs">
                                <i class="fas fa-toggle-off"></i>
                            </a>
                            @endif
                            <a href="{{ route('admin.menu.edit', $args) }}" class="btn btn-primary btn-xs">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{ route('admin.menu.show', $args) }}" class="btn btn-info btn-xs">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.menu.delete', $args) }}" class="btn btn-danger btn-xs">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                        <td class="text-center">{{ $row->id }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
</section>
<!-- /.CONTENT -->
</div>
</form>
</div>
@endsection
@section('header')
<link rel="stylesheet" href="home.css">
@endsection

