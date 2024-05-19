@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
  <div>
    <main>
        <h2 style="text-align: center; color: rgb(255, 0, 0);">Liên hệ</h2>
    
        <section class="contact-info">
          <h3 style="text-align: center;">Thông tin liên hệ</h3>
          <ul>
            <li><i class="fas fa-map-marker-alt" ></i> Địa chỉ: 123 Tăng Nhơn Phú, Phước Long B, Quận 9, TP.HCM</li>
            <li><i class="fas fa-phone"></i> Điện thoại: 0935 465 731</li>
            <li><i class="fas fa-envelope"></i> Email: 204yasuo@gmail.com</li>
          </ul>
        </section>
    
        <section class="google-map">
          <h3>Bản đồ</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7519445825797!2d106.77163787481882!3d10.830285489321785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317526ffe6203d2f%3A0xeddbc5d15e61abee!2zMTIzIFTEg25nIE5oxqFuIFBow7osIFBoxrDhu5tjIExvbmcgQiwgUXXhuq1uIDksIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1715543263562!5m2!1svi!2s" 
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    
        <section class="contact-form">
          <h3>Gửi liên hệ</h3>
          <form action="process.php" method="post"> <div class="form-group">
              <label for="name">Họ và tên:</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="message">Nội dung:</label>
              <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Gửi liên hệ</button>
          </form>
        </section>
    
      </main>
  </div>



@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection