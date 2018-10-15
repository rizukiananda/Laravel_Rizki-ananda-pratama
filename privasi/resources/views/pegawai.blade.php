@extends('template/t_index')
@section('content')
<div class="container">
@if(Session::has('message'))
	<span class="label label-success">{!! Session::get('message') !!}</span>
@endif
<p></p>
<div class="table-responsive">
<h3>Data Pegawai</h3>
	<a href="./tambah" class="btn btn-sm btn-info">Tambah data</a>
	<a href="./" class="btn btn-sm btn-success">Menu Awal</a><p></p>	
	<table class="table table-bordered table-stripped table-hover">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat/Gol. Ruang</th>
			<th>Jabatan</th>
			<th align='center'>Aksi</th>
		<tr>
		<?php $no=1; ?>
		@foreach ($pegawai as $data)
		<tr>
			<td>{{ $data->nip }}</td>
			<td>{{ $data->nama }}</td>
			<td>{{ $data->pangkat }}</td>
			<td>{{ $data->jbt }}</td>
			<td align='center'>
				<a href="./formeditpegawai/{{ $data->nip }}" class="btn btn-sm btn-info">Edit</a>
				<a href="./hapus/{{ $data->nip }}" class="btn btn-sm btn-danger">hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>
</div>
@stop