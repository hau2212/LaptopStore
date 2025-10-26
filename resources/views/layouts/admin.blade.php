<!DOCTYPE html>
<html lang="vi">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>

    {{-- CSS chung --}}
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    {{-- CSS riêng từng trang --}}
    @yield('style')
</head>

<body>
    <div class="admin-wrapper">

        {{-- Sidebar --}}
        <aside class="admin-sidebar">
            <div class="admin-logo">
                <h2>ADMIN PANEL</h2>
            </div>

            <ul class="admin-menu">
                <li><a href="{{ route('admin.products') }}">📊 Dashboard</a></li>
                <li><a href="{{ route('admin.product.store') }}">👤 Users</a></li>
                <li><a href="{{ route('admin.products') }}">🛒 Products</a></li>
                <li><a href="{{ route('admin.product.store') }}">📦 Orders</a></li>
                <li><a href="{{ route('admin.product.store') }}">🚪 Logout</a></li>
            </ul>
        </aside>

        {{-- Nội dung chính --}}
        <main class="admin-main">
            <header class="admin-header">
                <h1>@yield('page_title', 'Dashboard')</h1>
                <div class="admin-user">
                    Xin chào, {{ Auth::user()->name ?? 'Admin' }}
                </div>
            </header>

            <section class="admin-content">
                @yield('content')
            </section>
        </main>

    </div>

    
</body>
</html>
