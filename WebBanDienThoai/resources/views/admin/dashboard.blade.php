<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css-bootstrap/css/styles.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('css-bootstrap/js/scripts.js') }}"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5">
        <div class="container">
            <a class="navbar-brand mr-auto title" href="#">Quản trị viên</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category.index') }}">Danh mục</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manufacturer.listmanufacturer') }}">Hãng Sản Xuất</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.listproduct') }}">Sản Phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.orderindexAdmin') }}">Đơn Hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.listuser') }}">Người dùng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.listpost') }}">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Đăng Xuất</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="">Đăng Nhập</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
<style>
    .title{
        color: white !important;
        font-weight: bold;
        font-size: 20px;
    }
    .nav-link{
        font-size: 15px;
        font-weight: bold;
        color: white !important;
    }
    nav{
        background: #217b7e;
    }
    .pagination{
        background: white !important;
    }
</style>
</body>

</html>