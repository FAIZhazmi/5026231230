
@extends('template')

@section('content')
	<h3>Data Karyawan</h3>
    <br/>
	<table class="table table-striped">
		<tr>
            <th>NIP</th>
			<th>nama</th>
			<th>pangkat</th>
			<th>gaji</th>
			<th>Opsi</th>
		</tr>
		@foreach($eas as $n)
        <tr>
            <td>{{ $n->NIP }}</td>
            <td>{{ $n->nama}}</td>
            <td>{{ $n->pangkat }}</td>
            <td>{{ number_format($n->gaji, 0, ',', '.') }}</td>
            <td>
                {{ $eas->links() }}
                <a href="/eas/hapus/{{$n->NIP}}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
		@endforeach
	</table>
    <br/>
    {{ $eas->links() }}
    <a href="/eas/tambah" class="btn btn-primary">Tambah Data</a>
    <br>
    <br>
@endsection
