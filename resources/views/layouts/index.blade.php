<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> <!-- đặt bảng mã UTF-8 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- responsive trên mobile -->
  <title>@yield('title', 'My Website')</title>

  <!-- Font chữ Google -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS (grid, navbar, utilities…) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icon Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- CSS của dự án (thứ tự quan trọng: base trước, component sau) -->
  <link rel="stylesheet" href="{{ asset('css/home_layout/nav_bar.css') }}">     <!-- style cho sidebar trái -->
  <link rel="stylesheet" href="{{ asset('css/home_layout/search_bar.css') }}">  <!-- style ô search trên header -->
  <link rel="stylesheet" href="{{ asset('css/home_layout/background.css') }}">  <!-- nền trắng tổng thể -->
  <link rel="stylesheet" href="{{ asset('css/home_layout/footer.css') }}">      <!-- footer đỏ & logo to -->
  <link rel="stylesheet" href="{{ asset('css/home_layout/header.css') }}">      <!-- header đỏ, sticky -->

  @yield('style') <!-- nơi trang con chèn CSS riêng (ví dụ home/product) -->
</head>

<!-- body là flex-col để footer luôn ở đáy khi nội dung ngắn -->
<body class="d-flex flex-column min-vh-100 background">

  <!-- ===================== HEADER / NAVBAR ===================== -->
  <nav class="navbar navbar-expand-lg sticky-top shadow-sm custom_navbar header">
    <!-- container: canh nội dung theo max-width của Bootstrap -->
    <div class="container">

      <!-- Logo → về trang chủ -->
      <a class="navbar-brand d-flex align-items-center" href="{{ Route('home') }}">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" height="55" class="me-2"> <!-- khống chế cao 55px -->
      </a>

      <!-- Ô tìm kiếm dạng datalist (gợi ý khi gõ; chưa phải form tìm kiếm) -->
      <div>
        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
        <datalist id="datalistOptions">
          <option value="WorkStation">
          <option value="office">
          <option value="gaming">
          <option value="computer">
        </datalist>
      </div>

      <!-- Nút hamburger xuất hiện khi < lg -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
              aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Khối menu phải (collapse để ẩn/hiện trên mobile) -->
      <div class="collapse navbar-collapse" id="mainNav">
        <!-- Menu chính (ms-auto đẩy sang phải) -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <!-- thêm class active khi route hiện tại là home -->
            <a class="nav-link hover_link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover_link {{ request()->is('shop*') ? 'active' : '' }}" href="{{ route('product.index') }}">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover_link {{ request()->is('blog*') ? 'active' : '' }}" href="{{ url('/blog') }}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hover_link {{ request()->is('contact*') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
          </li>
        </ul>

        <!-- Nhóm Login (cách nhẹ sang bằng ms-lg-3) -->
        <ul class="navbar-nav ms-lg-3">
          <li class="nav-item">
            <a class="nav-link hover_link_login {{ request()->is('login') ? 'active' : '' }}" href="{{ url('/login') }}">
              <i class="fa-solid fa-user me-1"></i> Login
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- =================== /HEADER =================== -->

  <!-- ===================== MAIN + SIDEBAR ===================== -->
  <main class="flex-grow-1 py-4"> <!-- flex-grow: chiếm phần còn lại để footer bám đáy -->
    <div class="container-fluid">
      <div class="row">
        <!-- SIDEBAR: menu trái cố định (vị trí & top do nav_bar.css điều khiển) -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar p-3 border-end">
          <!-- Tiêu đề menu -->
          <h5 class="text-dark mb-3"><i class="fa-solid fa-bars me-2"></i>Menu</h5>

          <!-- Các nhóm mục -->
          <ul class="nav flex-column">

            <!-- Dropdown: Laptop -->
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Laptop</a>
              <ul class="dropdown-menu submenu">
                <li><a class="dropdown-item" href="#">User Roles</a></li>
                <li><a class="dropdown-item" href="#">Access Logs</a></li>
                <li><a class="dropdown-item" href="#">Firewall Rules</a></li>
              </ul>
            </li>

            <!-- Dropdown: Computer -->
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Computer</a>
              <ul class="dropdown-menu submenu">
                <li><a class="dropdown-item" href="#">User Roles</a></li>
                <li><a class="dropdown-item" href="#">Access Logs</a></li>
                <li><a class="dropdown-item" href="#">Firewall Rules</a></li>
              </ul>
            </li>

            <!-- Mục thường -->
            <li class="nav-item mb-2">
              <a class="nav-link text-dark" href="#"><i class="fa-solid fa-network-wired me-2"></i> Accessories</a>
            </li>
            <li class="nav-item mb-2">
              <a class="nav-link text-dark" href="#"><i class="fa-solid fa-bug me-2"></i> Stick</a>
            </li>
            <li class="nav-item mb-2">
              <a class="nav-link text-dark" href="#"><i class="fa-solid fa-gear me-2"></i> Review</a>
            </li>
          </ul>
        </nav>

        <!-- CONTENT: cột phải. margin-left để tránh đè lên sidebar khi sidebar là fixed -->
        <!-- 16.6667% ≈ col-md-3; bạn có thể đổi thành px cố định (vd 240px) cho chắc với sidebar 220px -->
        <div class="col-md-9 col-lg-10 px-4" style="margin-left: 16.6667%;">
          @yield('content') <!-- Trang con render nội dung tại đây -->
        </div>
      </div>
    </div>
  </main>
  <!-- =================== /MAIN =================== -->

  <!-- ========================= FOOTER ========================= -->
  <footer class="footer"> <!-- .footer được style trong footer.css (nền đỏ, chừa chỗ sidebar) -->
    <div class="footer-inner"> <!-- khung flex chia 2 cột trái-phải -->
      <!-- Cột trái: logo + mô tả -->
      <div class="footer-left d-flex align-items-center gap-3">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="footer-logo"> <!-- logo to (height ~140px) -->
        <div>
          <h3 class="generic">LaptopShop</h3>
          <p class="generic">Your one-stop shop for all laptop needs.</p>
          <p class="generic mb-0">@yield('footer', '© 2024 My Website. All rights reserved.')</p>
        </div>
      </div>

      <!-- Cột phải: liên hệ + social -->
      <div class="footer-right text-end">
        <h5>Contact Us</h5>
        <p class="mb-1">Email: <a href="mailto:info@mywebsite.com">info@mywebsite.com</a></p>
        <div class="mt-2">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- ======================= /FOOTER ======================= -->

  <!-- Bootstrap JS (cần cho dropdown, collapse…) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
