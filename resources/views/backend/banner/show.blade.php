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
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <strong class="text-dark text-lg">Chi tiết danh mục </strong>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a class="btn btn-sm btn-info" href="{{ route('admin.banner.index') }}">
                            <i class="fas fa-arrow-left"></i> Quay lại
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tên trường</th>
                                    <th>Giá trị</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td><?= $banner->id ?></td>
                                </tr>
                                <tr>
                                    <td> name</td>
                                    <td><?= $banner->name ?></td>
                                </tr>
                                <tr>
                                    <td>description</td>
                                    <td><?= $banner->description ?></td>
                                </tr>
                                <tr>
                                    <td>link</td>
                                    <td><?= $banner->link ?></td>
                                </tr>
                                <tr>
                                    <td>position</td>
                                    <td><?= $banner->position ?></td>
                                </tr>
                                <tr>
                                    <td>image</td>
                                    <td> <img src="{{ asset('images/banners/' . $banner->image) }}" class="img-fluid"
                                            alt="{{ $banner->image }}"></td>
                                </tr>
                                <tr>
                                    <td>created_at</td>
                                    <td><?= $banner->created_at ?></td>
                                </tr>
                                <tr>
                                    <td>created_by</td>
                                    <td><?= $banner->created_by ?></td>
                                </tr>
                                <tr>
                                    <td>updated_at</td>
                                    <td><?= $banner->updated_at ?></td>
                                </tr>
                                <tr>
                                    <td>updated_by</td>
                                    <td><?= $banner->updated_by ?></td>
                                </tr>
                                <tr>
                                    <td>status</td>
                                    <td><?= $banner->status ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
