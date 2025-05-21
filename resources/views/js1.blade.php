<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function hello() {
            alert("Selamat anda mendapatkan uang 200 juta milyar");
        }

        function Tambah() {
            var Bilangan1 = document.getElementById("bil1").value;
            var Bilangan2 = document.getElementById("bil2").value;
            var Bilangan3 = document.getElementById("bil3").value;

            hasil = parseFloat(Bilangan1)+parseFloat(Bilangan2)+parseFloat(Bilangan3);
            
            document.getElementById("hasil").innerHTML = hasil;
        }
    </script>
    </head>
    <body>
<div class="container">
        <button type="button" class="btn btn-primary" onclick="hello()">Klik Disini</button>

        <p>
            <h3>kalkulator</h3>
            Bilangan 1:
            <input type="text" name="" id="bil1" class="form-control" value="0">
            <br>
            Bilangan 2 :
            <input type="text" name="" id="bil2" class="form-control" value="0">
            <br>
            Bilangan 3 :
            <input type="text" name="" id="bil3" class="form-control" value="0">
            <br>
            hasil penjumlahan : <div id="hasil"></div>
            <br>
            <button type="button" class="btn btn-primary" onclick="Tambah()">Tambah</button>
        </p>
</div>
    </body>
</html>