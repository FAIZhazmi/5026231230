<!DOCTYPE html>
<html lang="en">

<head>
    <title>Faiz Hazmi Maulana : 5026231230</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .jumbotron {
            background-color: #9de2e2;
            height: 150px;
            padding: 50px 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .jumbotron h1 {
            font-size: 36px;
            font-weight: 600;
            color: #333;
        }

        .navbar {
            background: linear-gradient(45deg, #007bff, #6abf69);
            margin-bottom: 20px;
            border-radius: 50px;
            padding: 10px 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            font-size: 16px;
            color: white;
            padding: 10px 20px;
            transition: all 0.3s ease;
            border-radius: 30px;
        }

        .navbar-nav .nav-link:hover {
            background-color: #ffffff;
            color: #007bff;
            transform: scale(1.1);
        }

        .navbar-nav {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .container {
            padding: 40px 20px;
        }

        .table-striped {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        .btn-info {
            background-color: #007bff;
            color: white;
            border-radius: 20px;
        }

        .btn-info:hover {
            background-color: #0056b3;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            border-radius: 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center mx-auto">
        <h1>5026231230 : Faiz Hazmi Maulana</h1>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="frontend"><i class="fas fa-laptop-code"></i> All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai"><i class="fas fa-users"></i> Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pensil"><i class="fas fa-pencil-alt"></i> Tugas CRUD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/newkaryawan"><i class="fas fa-cogs"></i> EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan"><i class="fas fa-user-tie"></i> Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan"><i class="fas fa-brain"></i> Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pagecounter"><i class="fas fa-lightbulb"></i> Latihan 3</a>
            </li>
        </ul>
    </nav>

    <br>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
