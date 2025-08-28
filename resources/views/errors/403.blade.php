@php
    $title = '403';
    $subTitle = 'Akses Ditolak';
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - {{ $subTitle }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0f172a;
            color: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background: #1e293b;
            border-radius: 1rem;
            padding: 3rem 2rem;
            text-align: center;
            max-width: 480px;
            width: 100%;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        .card img {
            width: 180px;
            margin: 0 auto 1.5rem;
        }
        .card h1 {
            font-size: 4rem;
            margin-bottom: 0.5rem;
        }
        .card h6 {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: #cbd5e1;
        }
        .card p {
            margin-bottom: 2rem;
            color: #94a3b8;
        }
        .btn {
            display: inline-block;
            background-color: #dc2626; /* merah untuk forbidden */
            color: #fff;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            text-decoration: none;
            transition: background 0.3s;
        }
        .btn:hover {
            background-color: #b91c1c;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="{{ asset('assets/images/403.png') }}" alt="403 Forbidden">
        <h1>{{ $title }}</h1>
        <h6>{{ $subTitle }}</h6>
        <p>Maaf, kamu tidak memiliki izin untuk mengakses halaman ini.</p>
        <a href="{{ url('/') }}" class="btn">← Kembali ke Beranda</a>
    </div>
</body>
</html>
