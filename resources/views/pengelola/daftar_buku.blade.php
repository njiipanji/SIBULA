@extends('layouts.master-pengelola')

@section('title', 'Daftar Buku | Pengelola')

@section('title-page','<h3><strong>Daftar Buku</strong></h3>')

@section('content')
	<table class="responsive-table striped centered">
		<thead>
			<tr>
				<th data-field="no">No.</th>
				<th data-field="judul">Judul Buku</th>
				<th data-field="penerbit">Penerbit Buku</th>
				<th data-field="jumlah">Jumlah Buku</th>
				<th data-field="asal">Asal Buku</th>
				<th data-field="">Operasi</th>
			</tr>
		</thead>
		<tbody>
			@for ($i = 0; $i < 5; $i++)
				<tr>
					<td>{{{ $i+1 }}}</td>
					<td>Diriku (Tema 1) SDLB-A Kls 1</td>
					<td>Kemendikbud</td>
					<td>5</td>
					<td>Dinas Provinsi</td>
					<td>
						<button class="btn waves-effect waves-light red" onclick="confirmDelete()"><i class="material-icons">delete</i></button>
						<a href="#editmodal_book"><button class="btn waves-effect waves-light blue" data-target="editmodal"><i class="material-icons">mode_edit</i></button></a>
					</td>
				</tr>
			@endfor
		</tbody>
	</table>

	<div id="addmodal_book" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4 class="center">Tambah Data Buku</h4>
					<form style="margin-top: 15px;">
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">library_books</i>
					<input id="judulBuku" type="text" class="validate">
					<label for="judulBuku">Judul Buku</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">account_circle</i>
					<input id="penerbitBuku" type="text" class="validate">
					<label for="penerbitBuku">Penerbit Buku</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">view_module</i>
					<input id="jumlahBuku" type="number" class="validate">
					<label for="jumlahBuku">Jumlah Buku</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">info</i>
					<input id="asalBuku" type="text" class="validate">
					<label for="asalBuku">Asal Buku</label>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn green darken-2 waves-effect waves-light" type="submit" name="action" style="margin: 5px">Tambah</button>
				<button class="btn red darken-2 waves-effect waves-light modal-close" target="_blank" style="margin: 5px">Batal</button>
			</div>
		</form>
	</div>
	<div class="fixed-action-btn" style="bottom: 35px; right: 24px">
		<a class="btn-floating tooltipped btn-small green" href="#addmodal_book" data-position="left" data-delay="50" data-tooltip="Tambah Data Buku">
			<i class="material-icons">add</i>
		</a>
	</div>

	<div id="editmodal_book" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4 class="center">Ubah Data Buku</h4>
					<form style="margin-top: 15px;">
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">library_books</i>
					<input id="judulBuku" type="text" class="validate">
					<label for="judulBuku">Judul Buku</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">account_circle</i>
					<input id="penerbitBuku" type="text" class="validate">
					<label for="penerbitBuku">Penerbit Buku</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">view_module</i>
					<input id="jumlahBuku" type="number" class="validate">
					<label for="jumlahBuku">Jumlah Buku</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">info</i>
					<input id="asalBuku" type="text" class="validate">
					<label for="asalBuku">Asal Buku</label>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn green darken-2 waves-effect waves-light" type="submit" name="action" style="margin: 5px">Ubah</button>
				<button class="btn red darken-2 waves-effect waves-light modal-close" target="_blank" style="margin: 5px">Batal</button>
			</div>
		</form>
	</div>

	<script>
		function confirmDelete() {
			confirm("Apakah Anda yakin ingin menghapus data ini?")
		}
	</script>
@endsection

@section('addscript')
		$('.modal').modal();
@endsection