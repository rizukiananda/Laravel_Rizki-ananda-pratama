@extends('template/t_index')
@section('content')
<div class='container'>
<p></p>
	<div class="panel panel-default">
		<div class="panel-heading">
			Detail Data
				<a href="../read/" class="btn btn-sm btn-info">Lihat data</a>
				<a href="../" class="btn btn-sm btn-success">Menu Awal</a><p></p>	
		</div>
		<div class='panel-body'>
			<table class="table table-bordered table-stripped table-hover" width='100%'>
				<tr><th width='20%'>NIP</th><td> {!! $tpp->nip !!}</td></tr>
				<tr><th>Nama</th><td> {!! $nama !!}</td></tr>
				<tr><th>Pangkat/Golongan Ruang</th><td>  {!! $pangkat !!}</td></tr>
				<tr><th>Jabatan</th><td>  {!! $jbt !!} </td></tr>
				<tr><th>TPP Maksimal</th><td> {!! $tpp->tppmax !!}</td></tr>
				<tr><th>Tahun</th><td> {!! $tpp->tahun !!}</td></tr>
				<tr><th>Bulan</th><td> {!! $tpp->bulan !!}</td></tr>
				<tr><th>Jumlah Hari Kerja</th><td> {!! $tpp->jhk !!}</td></tr>
				<tr><th>Hadir</th><td> {!! $tpp->hadir !!}</td></tr>
				<tr><th>Izin</th><td> {!! $tpp->izin !!}</td></tr>
				<tr><th>Sakit</th><td> {!! $tpp->sakit !!}</td></tr>
				<tr><th>Cuti</th><td> {!! $tpp->cuti !!}</td></tr>
				<tr><th>Tanpa Alasan Sah</th><td> {!! $tpp->tas !!} hari</td></tr>
				<tr><th>Terlambat</th><td> {!! $tpp->terlambat !!} menit</td></tr>
				<tr><th>Cepat Pulang</th><td> {!! $tpp->cepatpulang !!} menit</td></tr>
				<tr><th>UWAS</th><td> {!! $tpp->uwas !!} kali</td></tr>
				<tr><th>Upacara</th><td> {!! $tpp->upacara !!} kali</td></tr>
				<tr><th>Wirid</th><td> {!! $tpp->wirid !!}</td></tr>
				<tr><th>Apel</th><td> {!! $tpp->apel !!}</td></tr>
				<tr><th>Senam</th><td> {!! $tpp->senam !!}</td></tr>
				<tr><th>SKP</th><td> {!! $tpp->skp !!}</td></tr>
				<tr><th>Orientasi Pelayanan</th><td> {!! $tpp->orientasip !!}</td></tr>
				<tr><th>Integritas</th><td> {!! $tpp->integritas !!}</td></tr>
				<tr><th>Disiplin</th><td> {!! $disiplin !!}</td></tr>
				<tr><th>Komitmen</th><td> {!! $komitmen !!}</td></tr>
				<tr><th>Kerjasama</th><td> {!! $tpp->kerjasama !!}</td></tr>
				<tr><th>Kepemimpinan</th><td> {!! $tpp->kepemimpinan !!}</td></tr>
				<tr><th>LKH</th><td> {!! $tpp->lkh !!} menit</td></tr>
				<tr><th>SOP</th><td> {!! $tpp->sop !!}</td></tr>
				<tr>
					<th colspan=2><center>TPP</center></th>
				</tr>
				<tr><th>Sasaran Kerja Pegawai</th><td> {!! $skp !!}</td></tr>
				<tr><th>Perilaku Kerja</th><td> {!! $pk !!}</td></tr>
								<tr><th>Penilaian Prestasi Kerja</th><td> {!! $ppk !!}</td></tr>
				<tr><th>Kehadiran</th><td> {!! $kehadiran !!}</td></tr>
				<tr><th>Kinerja</th><td> {!! $kinerja !!}</td></tr>
				<tr><th>TPP Bulan Ini</th><td> {!! $tppb !!}</td></tr>
				
			</table>
		</div>
	</div>
</div>