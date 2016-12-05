@extends('layouts.master-admin')

@section('title', 'Dashboard | Administrator')

@section('title-page','<h3><strong>Dashboard Administrator</strong></h3>')

@section('content')
	<div class="col s12 m6 l4">
		<h5 class="header center" style="font-weight: 300">Tambah Pengelola</h5>
		<div class="card horizontal">
			<div class="card-image">
				<img src="/images/admin/add_card.png">
			</div>
			<div class="card-stacked">
				<div class="card-content">
					<p>Menambah data pengelola.</p>
				</div>
				<div class="card-action cyan-text text-darken-2 center">
					<a href="#addmodal"><button class="btn-floating cyan darken-2 waves-effect waves-light"><i class="material-icons right">send</i></button></a>
				</div>
			</div>
		</div>
	</div>
	<div class="col s12 m6 l4">
		<h5 class="header center" style="font-weight: 300">Hapus Pengelola</h5>
		<div class="card horizontal">
			<div class="card-image">
				<img src="/images/admin/delete_card.png">
			</div>
			<div class="card-stacked">
				<div class="card-content">
					<p>Menghapus data pengelola.</p>
				</div>
				<div class="card-action cyan-text text-darken-2 center">
					<a href="/admin/daftar_pengelola"><button class="btn-floating red darken-2 waves-effect waves-light"><i class="material-icons right">send</i></button></a>
				</div>
			</div>
		</div>
	</div>
	<div class="col s12 m6 l4">
		<h5 class="header center" style="font-weight: 300">Ubah Pengelola</h5>
		<div class="card horizontal">
			<div class="card-image">
				<img src="/images/admin/edit_card.png">
			</div>
			<div class="card-stacked">
				<div class="card-content">
					<p>Mengubah data pengelola.</p>
				</div>
				<div class="card-action cyan-text text-darken-2 center">
					<a href="/admin/daftar_pengelola"><button class="btn-floating green darken-2 waves-effect waves-light"><i class="material-icons right">send</i></button></a>
				</div>
			</div>
		</div>
	</div>

	<div id="addmodal" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4 class="center">Tambah Data Pengelola</h4>
					<form style="margin-top: 15px;">
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">account_circle</i>
					<input id="namaPengelola" type="text" class="validate">
					<label for="namaPengelola">Nama Pengelola</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">today</i>
					<input id="ttlPengelola" class="datepicker" type="date" class="validate">
					<label for="ttlPengelola">Tanggal Lahir</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">phone</i>
					<input id="telponPengelola" type="text" class="validate">
					<label for="telponPengelola">No. Telepon</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">email</i>
					<input id="emailPengelola" type="email" class="validate">
					<label for="emailPengelola">Email</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">vpn_key</i>
					<input id="passwordPengelola" type="password" class="validate">
					<label for="passwordPengelola">Password</label>
				</div>
				<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
					<i class="material-icons prefix">vpn_key</i>
					<input id="confirmPass" type="password" class="validate">
					<label for="confirmPass">Konfirmasi Password</label>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn green darken-2 waves-effect waves-light" type="submit" name="action" style="margin: 5px">Tambah</button>
				<button class="btn red darken-2 waves-effect waves-light modal-close" target="_blank" style="margin: 5px">Batal</button>
			</div>
		</form>
	</div>
@endsection

@section('addscript')
		$('.modal').modal();
		$('.datepicker').pickadate({
			selectMonths: true,
			selectYears: 15
		});
@endsection