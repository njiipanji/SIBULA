@extends('layouts.master-pengelola')

@section('title', 'Hasil Pencarian | Pengelola')

@section('title-page','<h3><strong>Hasil Pencarian</strong></h3>')

@section('content')
	<style>
		.page-footer {
			bottom: 0; position: fixed; width: 100%;
		}
	</style>
	<h5 class="header center" style="font-weight: 300">"Judul Buku: Diriku (Tema 1)"</h5>
	<table class="responsive-table striped centered">
		<thead>
			<tr>
				<th data-field="no">No.</th>
				<th data-field="judul">Judul Buku</th>
				<th data-field="penerbit">Penerbit Buku</th>
				<th data-field="jumlah">Jumlah Buku</th>
				<th data-field="asal">Asal Buku</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Diriku (Tema 1) SDLB-A Kls 1</td>
				<td>Kemendikbud</td>
				<td>5</td>
				<td>Dinas Provinsi</td>
			</tr>
		</tbody>
	</table>
@endsection