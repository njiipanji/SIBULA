@extends('layouts.master-pengelola')

@section('title', 'Dashboard | Pengelola')

@section('title-page','<h3><strong>Dashboard Pengelola</strong></h3>')

@section('content')

	<div class="col s12 m12 l12">
		<h5 class="header center" style="font-weight: 500">Menu Kelola Data Buku</h5>
		<div class="card horizontal">
			<div class="col s12 m6 l4">
				<h5 class="header center" style="font-weight: 300">Tambah Buku</h5>
				<div class="card horizontal blue darken-2 white-text">
					<div class="card-image">
						<img src="/images/pengelola/add_card_book.png">
					</div>
					<div class="card-stacked">
						<div class="card-content">
							<p>Menambah data buku.</p>
						</div>
						<div class="card-action cyan-text text-darken-2 center">
							<a href="#addmodal_book"><button class="btn-floating cyan darken-2 waves-effect waves-light"><i class="material-icons right">send</i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<h5 class="header center" style="font-weight: 300">Hapus Buku</h5>
				<div class="card horizontal blue darken-2 white-text">
					<div class="card-image">
						<img src="/images/pengelola/delete_card_book.png">
					</div>
					<div class="card-stacked">
						<div class="card-content">
							<p>Menghapus data buku.</p>
						</div>
						<div class="card-action cyan-text text-darken-2 center">
							<a href="/pengelola/daftar_buku"><button class="btn-floating red darken-2 waves-effect waves-light"><i class="material-icons right">send</i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<h5 class="header center" style="font-weight: 300">Ubah Buku</h5>
				<div class="card horizontal blue darken-2 white-text">
					<div class="card-image">
						<img src="/images/pengelola/edit_card_book.png">
					</div>
					<div class="card-stacked">
						<div class="card-content">
							<p>Mengubah data buku.</p>
						</div>
						<div class="card-action cyan-text text-darken-2 center">
							<a href="/pengelola/daftar_buku"><button class="btn-floating green darken-2 waves-effect waves-light"><i class="material-icons right">send</i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<h5 class="header center" style="font-weight: 300">Cari Buku</h5>
				<div class="card horizontal blue darken-2 white-text">
					<div class="card-image">
						<img src="/images/pengelola/search_card_book.png">
					</div>
					<div class="card-stacked">
						<div class="card-content">
							<p>Mencari data buku.</p>
						</div>
						<div class="card-action cyan-text text-darken-2 center">
							<a href="#searchmodal_book"><button class="btn-floating yellow darken-2 waves-effect waves-light"><i class="material-icons right">send</i></button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col s12 m12 l12">
		<h5 class="header center" style="font-weight: 500">Menu Kelola Data Inventaris</h5>
		<div class="card horizontal">
			<div class="col s12 m6 l4">
				<h5 class="header center" style="font-weight: 300">Tambah Inventaris</h5>
				<div class="card horizontal blue darken-2 white-text">
					<div class="card-image">
						<img src="/images/pengelola/add_card_inv.png">
					</div>
					<div class="card-stacked">
						<div class="card-content">
							<p>Menambah data inventaris.</p>
						</div>
						<div class="card-action cyan-text text-darken-2 center">
							<a href="#addmodal_inv"><button class="btn-floating cyan darken-2 waves-effect waves-light"><i class="material-icons right">send</i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<h5 class="header center" style="font-weight: 300">Hapus Inventaris</h5>
				<div class="card horizontal blue darken-2 white-text">
					<div class="card-image">
						<img src="/images/pengelola/delete_card_inv.png" height="186px">
					</div>
					<div class="card-stacked">
						<div class="card-content">
							<p>Menghapus data inventaris.</p>
						</div>
						<div class="card-action cyan-text text-darken-2 center">
							<a href="/pengelola/daftar_inventaris"><button class="btn-floating red darken-2 waves-effect waves-light"><i class="material-icons right">send</i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<h5 class="header center" style="font-weight: 300">Ubah Inventaris</h5>
				<div class="card horizontal blue darken-2 white-text">
					<div class="card-image">
						<img src="/images/pengelola/edit_card_inv.png">
					</div>
					<div class="card-stacked">
						<div class="card-content">
							<p>Mengubah data inventaris.</p>
						</div>
						<div class="card-action cyan-text text-darken-2 center">
							<a href="/pengelola/daftar_inventaris"><button class="btn-floating green darken-2 waves-effect waves-light"><i class="material-icons right">send</i></button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<h5 class="header center" style="font-weight: 300">Cari Inventaris</h5>
				<div class="card horizontal blue darken-2 white-text">
					<div class="card-image">
						<img src="/images/pengelola/search_card_inv.png">
					</div>
					<div class="card-stacked">
						<div class="card-content">
							<p>Mencari data inventaris.</p>
						</div>
						<div class="card-action cyan-text text-darken-2 center">
							<a href="#searchmodal_inv"><button class="btn-floating yellow darken-2 waves-effect waves-light"><i class="material-icons right">send</i></button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

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

	<div id="searchmodal_book" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4 class="center">Cari Data Buku</h4>
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
					<i class="material-icons prefix">info</i>
					<input id="asalBuku" type="text" class="validate">
					<label for="asalBuku">Asal Buku</label>
				</div>
			</div>
			<div class="modal-footer">
				<a href="/pengelola/cari_buku"><button class="btn green darken-2 waves-effect waves-light" style="margin: 5px">Cari</button></a>
				<button class="btn red darken-2 waves-effect waves-light modal-close" target="_blank" style="margin: 5px">Batal</button>
			</div>
		</form>
	</div>
	<div id="searchmodal_inv" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4 class="center">Cari Data Inventaris</h4>
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
					<i class="material-icons prefix">loyalty</i>
					<select id="keadaanInv">
						<option value="" disabled selected>Pilih disini</option>
						<option value="Baik">Baik</option>
						<option value="Rusak">Rusak</option>
					</select>
					<label for="keadaanInv">Keadaan Inventaris</label>
				</div>
			</div>
			<div class="modal-footer">
				<a href="/pengelola/cari_inventaris"><button class="btn green darken-2 waves-effect waves-light" style="margin: 5px">Cari</button></a>
				<button class="btn red darken-2 waves-effect waves-light modal-close" target="_blank" style="margin: 5px">Batal</button>
			</div>
		</form>
	</div>
@endsection

@section('addscript')
		$('.modal').modal();
		$('select').material_select();
@endsection