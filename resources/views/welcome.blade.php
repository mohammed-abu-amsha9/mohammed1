<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الكتب</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">

        <a class="navbar-brand fw-bold" href="#">📚 إدارة الكتب</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBooks">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarBooks">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('books.create') ? 'active fw-bold' : '' }}"
                       href="{{ route('books.create') }}">
                        ➕ إضافة كتاب
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('books.index') ? 'active fw-bold' : '' }}"
                       href="{{ route('books.index') }}">
                        📖 عرض الكتب
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>

<div class="container mt-4">
    <h3>اهلا وسهلا </h3>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
