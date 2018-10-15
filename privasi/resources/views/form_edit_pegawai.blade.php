@extends('template/t_index')
@section('content')
<div class='container'>
<p></p>
	<div class="panel panel-default">
		<div class="panel-heading">
			Edit Data
		</div>
		<div class='panel-body'>
			{!! Form::open(['url' => '/proseseditpegawai']) !!}
				{!! Form::text('nip',$pegawai->nip,['placeholder' => 'nip','class' => 'form-control']) !!}
				Nama
				{!! Form::text('nama',$pegawai->nama,['placeholder' => 'Nama','class' => 'form-control']) !!}
				Pangkat/Golongan Ruang
				{!! Form::text('pangkat',$pegawai->pangkat,['placeholder' => 'pangkat/golongan ruang','class' => 'form-control']) !!}
				jabatan
				{!! Form::text('jbt',$pegawai->jbt,['placeholder' => 'jabatan','class' => 'form-control']) !!}
				<p></p>
				{!! Form::submit('Edit Data',['class' => 'btn btn-warning']) !!}
			{!! Form::close() !!}
			@stop
		</div>
	</div>
</div>