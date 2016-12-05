@extends('layouts.master-admin')

@section('title', 'Daftar Pengelola | Administrator')

@section('title-page','<h3><strong>Daftar Pengelola</strong></h3>')

@section('content')
	<table class="responsive-table striped centered">
		<thead>
			<tr>
				<th data-field="no">No.</th>
				<th data-field="nama">Nama</th>
				<th data-field="ttl">Tanggal Lahir</th>
				<th data-field="telepon">No Telepon</th>
				<th data-field="email">Email</th>
				<th data-field="">Operasi</th>
			</tr>
		</thead>
		<tbody>
			@for ($i = 0; $i < 5; $i++)
				<tr>
					<td>{{{ $i+1 }}}</td>
					<td>Aditya Wicaksono</td>
					<td>12-11-1995</td>
					<td>085443223144</td>
					<td>adwicak@gmail.com</td>
					<td>
						<button class="btn waves-effect waves-light red" onclick="confirmDelete()"><i class="material-icons">delete</i></button>
						<a href="#editmodal"><button class="btn waves-effect waves-light blue" data-target="editmodal"><i class="material-icons">mode_edit</i></button></a>
					</td>
				</tr>
			@endfor
		</tbody>
	</table>

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

	<div class="fixed-action-btn" style="bottom: 35px; right: 24px">
		<a class="btn-floating tooltipped btn-small green" href="#addmodal" data-position="left" data-delay="50" data-tooltip="Tambah Data Pengelola">
			<i class="material-icons">add</i>
		</a>
	</div>

	<div id="editmodal" class="modal modal-fixed-footer">
		<form style="margin-top: 15px;">
			<div class="modal-content">
				<h4 class="center">Ubah Data Pengelola</h4>
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
		$('.datepicker').pickadate({
			selectMonths: true,
			selectYears: 15
		});
@endsection