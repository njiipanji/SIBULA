@extends('layouts.master-pengelola')

@section('title', 'Daftar Buku | Pengelola')

@section('title-page','<h3><strong>Daftar Buku</strong></h3>')

@section('content')
	<table class="responsive-table striped centered">
		<thead>
			<tr>
				<th data-field="no">No.</th>
				<th data-field="nama">Nama Inventaris</th>
				<th data-field="asal">Asal Barang</th>
				<th data-field="jumlah">Jumlah Inventaris</th>
				<th data-field="keadaan">Keadaan Inventaris</th>
				<th data-field="keterangan">Keterangan</th>
				<th data-field="">Operasi</th>
			</tr>
		</thead>
		<tbody>
			@for ($i = 0; $i < 5; $i++)
				<tr>
					<td>{{{ $i+1 }}}</td>
					<td>Papan Tulis</td>
					<td>YKJA</td>
					<td>1</td>
					<td>Baik</td>
					<td>Kelas VII Bu Eni</td>
					<td>
						<button class="btn waves-effect waves-light red" onclick="confirmDelete()"><i class="material-icons">delete</i></button>
						<a href="#editmodal_inv"><button class="btn waves-effect waves-light blue" data-target="editmodal"><i class="material-icons">mode_edit</i></button></a>
					</td>
				</tr>
			@endfor
		</tbody>
	</table>

	<div id="addmodal_inv" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4 class="center">Tambah Data Inventaris</h4>
					<form style="margin-top: 15px;">
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">work</i>
					<input id="namaInv" type="text" class="validate">
					<label for="namaInv">Nama Inventaris</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">info</i>
					<input id="asalInv" type="text" class="validate">
					<label for="asalInv">Asal Barang</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">view_module</i>
					<input id="jumlahInv" type="number" class="validate">
					<label for="jumlahInv">Jumlah Inventaris</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">loyalty</i>
					<select id="keadaanInv">
						<option value="" disabled selected>Pilih disini</option>
						<option value="Baik">Baik</option>
						<option value="Rusak">Rusak</option>
					</select>
					<label for="keadaanInv">Keadaan Inventaris</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">description</i>
					<input id="ketInv" type="text" class="validate">
					<label for="ketInv">Keterangan Inventaris</label>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn green darken-2 waves-effect waves-light" type="submit" name="action" style="margin: 5px">Tambah</button>
				<button class="btn red darken-2 waves-effect waves-light modal-close" target="_blank" style="margin: 5px">Batal</button>
			</div>
		</form>
	</div>
	<div class="fixed-action-btn" style="bottom: 35px; right: 24px">
		<a class="btn-floating tooltipped btn-small green" href="#addmodal_inv" data-position="left" data-delay="50" data-tooltip="Tambah Data Inventaris">
			<i class="material-icons">add</i>
		</a>
	</div>

	<div id="editmodal_inv" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4 class="center">Ubah Data Inventaris</h4>
					<form style="margin-top: 15px;">
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">work</i>
					<input id="namaInv" type="text" class="validate">
					<label for="namaInv">Nama Inventaris</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">info</i>
					<input id="asalInv" type="text" class="validate">
					<label for="asalInv">Asal Barang</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">view_module</i>
					<input id="jumlahInv" type="number" class="validate">
					<label for="jumlahInv">Jumlah Inventaris</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">loyalty</i>
					<select id="keadaanInv">
						<option value="" disabled selected>Pilih disini</option>
						<option value="Baik">Baik</option>
						<option value="Rusak">Rusak</option>
					</select>
					<label for="keadaanInv">Keadaan Inventaris</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">description</i>
					<input id="ketInv" type="text" class="validate">
					<label for="ketInv">Keterangan Inventaris</label>
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
		$('select').material_select();
@endsection