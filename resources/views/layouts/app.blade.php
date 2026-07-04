<!DOCTYPE html>
<html>
<head>
    <title>KucingKu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color: #f8f9fa;
        }

        .hero{
            background: linear-gradient(135deg,#ffb347,#ffcc33);
            color: white;
            padding: 80px 20px;
            text-align: center;
            border-radius: 20px;
            margin-top: 20px;
        }

        .card img{
            height: 250px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">🐱 KucingKu</a>

        <div>
            <a class="nav-link d-inline text-white" href="/">Home</a>
            <a class="nav-link d-inline text-white" href="/cats">List Kucing</a>
        </div>
    </div>
</nav>

<div class="container py-4">
    @yield('content')
</div>

</body>
</html>