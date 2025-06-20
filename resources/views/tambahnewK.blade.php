@extends('template')

@section('content')
	<h3>Data Karyawan</h3>

	<a href="/eas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/eas/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                NIP
            </div>
            <div class="col-8">
                <input type="text" name="NIP" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Nama
            </div>
            <div class="col-8">
                <input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Pangkat
            </div>
            <div class="col-8">
                <input type="text" name="pangkat" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Gaji
            </div>
            <div class="col-8">
                <input type="text" name="gaji" required="required" class="form-control">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
