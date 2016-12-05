@extends('layouts.master-pengelola')

@section('title', 'Hasil Pencarian | Pengelola')

@section('title-page','<h3><strong>Hasil Pencarian</strong></h3>')

@section('content')
	<style>
		.page-footer {
			bottom: 0; position: fixed; width: 100%;
		}
	</style>
	<h5 class="header center" style="font-weight: 300">"Asal Barang: YKJA, Keadaan Inventaris: Baik"</h5>
	<table class="responsive-table striped centered">
		<thead>
			<tr>
				<th data-field="no">No.</th>
				<th data-field="nama">Nama Inventaris</th>
				<th data-field="asal">Asal Barang</th>
				<th data-field="jumlah">Jumlah Inventaris</th>
				<th data-field="keadaan">Keadaan Inventaris</th>
				<th data-field="keterangan">Keterangan</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Papan Tulis</td>
				<td>YKJA</td>
				<td>1</td>
				<td>Baik</td>
				<td>Kelas VII Bu Eni</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Meja</td>
				<td>YKJA</td>
				<td>5</td>
				<td>Baik</td>
				<td>Kelas V</td>
			</tr>
		</tbody>
	</table>
@endsection