@extends('template/t_index')
@section('content')
<div class="container">
@if(Session::has('message'))
	<span class="label label-success">{!! Session::get('message') !!}</span>
@endif
<p></p>
<div class="table-responsive">
	<h3>TPP Pegawai</h3>
	<a href="./tpp" class="btn btn-sm btn-info">Tambah data</a>
	<a href="./" class="btn btn-sm btn-success">Menu Awal</a><p></p>	
	<table class="table table-bordered table-stripped table-hover">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th align='center'>Aksi</th>
		<tr>
		<?php $no=1; ?>
		@foreach ($tpp as $data)
		<tr>
			<td>{{ $data->nip }}</td>
			<td>{{ $data->nama }}</td>
			<td>{{ $data->bulan }}</td>
			<td>{{ $data->tahun }}</td>
			<td align='center'>
				<a href="formedit/{{ $data->nip }}" class="btn btn-sm btn-info">Detail</a>
				<a href="hapus2/{{ $data->nip }}" class="btn btn-sm btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>
</div>
@stop