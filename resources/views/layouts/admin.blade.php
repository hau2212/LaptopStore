{{-- resources/views/admin/layouts/admin.blade.php --}}
<!doctype html>
<html lang="en">
<head>
    {{-- Meta cơ bản --}}
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {{-- CSRF cho form/AJAX --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Bootstrap + Icons (giữ nguyên UI) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- CSS tuỳ biến (đảm bảo đúng asset path) --}}
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />

    {{-- Tiêu đề có thể override từ view con --}}
    <title>@yield('title', 'Admin - Online Store')</title>

    {{-- Cho view con “đẩy” thêm CSS khi cần --}}
    @stack('styles')
</head>

<body>
    <div class="row g-0">
        <!-- sidebar -->
        <div class="p-3 col fixed text-white bg-dark">
            {{-- Logo/brand hoặc link về trang admin --}}
            <a href="{{ route('admin') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr />
            {{-- Menu điều hướng (dùng route name để đúng URL) --}}
            <ul class="nav flex-column">
                <li>
                    <a href="{{ route('admin') }}" class="nav-link text-white">
                        - Admin - Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('product.admin') }}" class="nav-link text-white">
                        - Admin - Products
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}" class="mt-2 btn bg-primary text-white">
                        Go back to the homepage
                    </a>
                </li>
            </ul>
        </div>
        <!-- /sidebar -->

        {{-- Khu vực nội dung chính --}}
        <div class="col content-grey">
            {{-- Thanh top (tên + avatar/logo) --}}
            <nav class="p-3 shadow d-flex justify-content-end align-items-center gap-2">
                <img class="img-logo-small" src="{{ asset('img/logo.png') }}" alt="Admin logo">
                <span class="profile-font fw-bold fs-5 text-dark me-2">Admin</span>
            </nav>
            {{-- Nội dung động của từng trang con --}}
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright -
                <a class="text-reset fw-bold text-decoration-none" target="_blank" rel="noopener"
                   href="https://twitter.com/danielgarax">
                    Daniel Correa
                </a>
            </small>
        </div>
    </div>
    <!-- /footer -->

    {{-- Bootstrap JS bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    {{-- Cho view con “đẩy” thêm JS khi cần --}}
    @stack('scripts')
</body>
</html>
