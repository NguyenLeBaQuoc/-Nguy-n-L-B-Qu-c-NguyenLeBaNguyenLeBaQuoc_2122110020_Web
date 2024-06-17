@extends('layouts.admin')
@section('title', 'Trang Chủ')


@section('content')
<div>
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

    <!-- CONTENT -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm mới đơn hàng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
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
                    <a class="btn btn-sm btn-danger" href="{{ route('admin.order.index') }}">
                        <i class="fas fa-arrow-left"></i> Quay lại
                    </a>
                </div>
            </div>
            </div>
                <tbody>
                    <div>
                        <div class="form-group">
                            <label class="delivery_name">Tên khách hàng: *</label>
                            <input type="text" class="form-control" name="delivery_name" placeholder="Nhập tên khách hàng" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label class="delivery_phone">Số điện thoại: *</label>
                            <input type="text" class="form-control" name="delivery_phone" placeholder="Nhập số điện thoại" name="fname"/>
                        </div>
                        <div class="form-group">
                            <label class="delivery_email">Email: *</label>
                            <input type="text" class="form-control" name="delivery_email" placeholder="Nhập email" name="fname"/>
                        </div>
                        <div class="mb-3">
                            <button  class="btn btn-success"  type="submit"  id="submit"  name="submit">Lưu</button>
                        </div>
                    </div>
                </tbody>
            </div>
        </div>
    </section>
    <!-- /.CONTENT -->
  </div>

@endsection
@section('header')
<link rel="stylesheet" href="home.css">
@endsection