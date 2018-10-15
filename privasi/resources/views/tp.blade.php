@extends('template/t_index')
@section('content')

<div class='container'>
<p></p>
	<div class="panel panel-default">
		<div class="panel-heading">
			Tambah Data 
			<a href="pegawai/" class="btn btn-sm btn-info">Lihat data</a>
			<a href="./" class="btn btn-sm btn-success">Menu Awal</a>
		</div>
		<div class='panel-body'>
			{!! Form::open(['url' => '/prosestambahpegawai']) !!}
				Nama
				{!! Form::text('nama','',['placeholder' => 'Nama','class' => 'form-control']) !!}
				NIP
				{!! Form::text('nip','',['placeholder' => 'nip','class' => 'form-control']) !!}
				Pangkat/Golongan Ruang
				{!! Form::text('pangkat','',['placeholder' => 'Pangkat/Golongan Ruang','class' => 'form-control']) !!}
				Jabatan
				{!! Form::text('jbt','',['placeholder' => 'Jabatan','class' => 'form-control']) !!}
				<p></p>
				{!! Form::submit('Tambah Data',['class' => 'btn btn-success']) !!}
			{!! Form::close() !!}
			@stop
			<!--
			//cara lama
			<form action="{{ url('/prosestambah') }}" method="post">
				Nama :
				<input type='text' name='nama' class='form-control' required/>
				Alamat :
				<input type='text' name='alamat' class='form-control' required/>
				Kelas :
				<input type='text' name='Kelas' class='form-control' required/>
				<br/>
				<input type='submit' value='Simpan' class='btn btn-success'/>
			</form>-->
		</div>
	</div>
</div>