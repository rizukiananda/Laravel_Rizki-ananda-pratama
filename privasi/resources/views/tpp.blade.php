@extends('template/t_index')
@section('content')

<div class='container'>
<p></p>
	<div class="panel panel-default">
		<div class="panel-heading">
			Tambah Data 
			<a href="read/" class="btn btn-sm btn-info">Lihat data</a>
			<a href="./" class="btn btn-sm btn-success">Menu Awal</a>
		</div>
		<div class='panel-body'>
		
		
			{!! Form::open(['url' => '/prosestambah']) !!}
				NIP
				<select name='nip' class='form-control'>
					@foreach ($tpp as $data)
					<option value='{{ $data->nip }}'>{{ $data->nip }} - {{ $data->nama }} </option>
					@endforeach
				</select>
				TPP Maksimal
				{!! Form::text('tppmax','',['placeholder' => 'TPP Maksimal','class' => 'form-control']) !!}
				Tahun
				{!! Form::text('tahun','',['placeholder' => 'Tahun','class' => 'form-control']) !!}
				Bulan
				{!! Form::text('bulan','',['placeholder' => 'Bulan','class' => 'form-control']) !!}
				Jumlah Hari Kerja
				{!! Form::text('jhk','',['placeholder' => 'Jumlah Hari Kerja','class' => 'form-control']) !!}
				Hadir
				{!! Form::text('hadir','',['placeholder' => 'Hadir','class' => 'form-control']) !!}
				Izin
				{!! Form::text('izin','',['placeholder' => 'Izin','class' => 'form-control']) !!}
				Sakit
				{!! Form::text('sakit','',['placeholder' => 'Sakit','class' => 'form-control']) !!}
				Cuti
				{!! Form::text('cuti','',['placeholder' => 'Cuti','class' => 'form-control']) !!}
				Tanpa Alasan Sah
				{!! Form::text('tas','',['placeholder' => 'Tanpa Alasan Sah','class' => 'form-control']) !!}
				Terlambat
				{!! Form::text('terlambat','',['placeholder' => 'Terlambat','class' => 'form-control']) !!}
				Cepat Pulang
				{!! Form::text('cepatpulang','',['placeholder' => 'Cepat Pulang','class' => 'form-control']) !!}
				UWAS
				{!! Form::text('uwas','',['placeholder' => 'UWAS','class' => 'form-control']) !!}
				Upacara
				{!! Form::text('upacara','',['placeholder' => 'Upacara','class' => 'form-control']) !!}
				Wirid
				{!! Form::text('wirid','',['placeholder' => 'Wirid','class' => 'form-control']) !!}
				Apel
				{!! Form::text('apel','',['placeholder' => 'Apel','class' => 'form-control']) !!}
				Senam
				{!! Form::text('senam','',['placeholder' => 'Senam','class' => 'form-control']) !!}
				SKP
				{!! Form::text('skp','',['placeholder' => 'SKP','class' => 'form-control']) !!}
				Orientasi Pelayanan
				{!! Form::text('orientasip','',['placeholder' => 'Orientasi Pelayanan','class' => 'form-control']) !!}
				Integritas
				{!! Form::text('integritas','',['placeholder' => 'Integritas','class' => 'form-control']) !!}
				Komitmen
				{!! Form::text('komitmen','',['placeholder' => 'Komitmen','class' => 'form-control']) !!}
				Disiplin
				{!! Form::text('disiplin','',['placeholder' => 'Disiplin','class' => 'form-control']) !!}
				Kerjasama
				{!! Form::text('kerjasama','',['placeholder' => 'Kerjasama','class' => 'form-control']) !!}
				Kepemimpinan
				{!! Form::text('kepemimpinan','',['placeholder' => 'Kepemimpinan','class' => 'form-control']) !!}
				LKH
				{!! Form::text('lkh','',['placeholder' => 'LKH','class' => 'form-control']) !!}
				SOP
				{!! Form::text('sop','',['placeholder' => 'SOP','class' => 'form-control']) !!}
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