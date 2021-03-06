	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav ml-auto">
			<a class="nav-item nav-link" id="nav-home" href="<?= base_url('user'); ?>">beranda</a>
			<a class="nav-item nav-link" id="nav-penilaian" href="<?= base_url('user/penilaian'); ?>">Keputusan</a>
			<div class="nav-item dropdown">
				<button class="btn btn-md dropdown-toggle btn-navbar" href="#" id="navbarDropdownMenuLink" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i>&nbsp; <?= $this->session->userdata('username'); ?></button>
				<div class="dropdown-menu">
					<h6 class="dropdown-header">Utilitas</h6>
					<a class="dropdown-item" href="<?= base_url('user/myProfile/' . $this->session->userdata('username')); ?>"><i class="fas fa-user-circle"></i>&nbsp; profil</a>
					<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="fas fa-sign-out-alt"></i>&nbsp; keluar</a>
					<div class="dropdown-divider" style="border-top:1px solid #707070;"></div>
					<h6 class="dropdown-header">Bantuan</h6>
					<a href="<?= base_url('user/panduan'); ?>" class="dropdown-item"><i class="far fa-question-circle"></i>&nbsp; Panduan Sistem</a>
					<a href="<?= base_url('user/tentang'); ?>" class="dropdown-item"><i class="fas fa-info-circle"></i>&nbsp; Tentang</a>
				</div>
			</div>
		</div>
	</div>
</div>
</nav>


<!-- =============================================================================================================
			AKHIR NAVBAR
================================================================================================================== -->

	<!-- <div class="bg-main-frame"> -->
	<div class="container-fluid container-fluid-custom">
		<div class="container cont-main-frame">
			<div class="forAlert"></div>
			<div class="main-box">
				<!--Tempat untuk title  -->
				<div class="header-title">
					<h1 class="main-title">Profil</h1>
					<hr class="title-line">
				</div>
				<!-- akhir header title -->
			</div>
			<!-- tempat untuk konten utama -->
			<div class="card bg-main-card">
				<div class="card-header card-header-custom">
					Form <strong>Ubah Data</strong>
				</div>
				<div class="card-body">
					<form method="POST" action="" class="form-custom">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Username</label>
							<div class="col-sm-10">
								<input type="text" readonly class="form-control-plaintext" id="username" name="username" value="<?= $user['username']; ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Nama</label>
							<div class="col-sm-10">
								<input type="text" class="form-control input-custom" id="nama" name="nama" autocomplete="off" value="<?= $user['nama']; ?>">
								<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Password 1</label>
							<div class="col-sm-10">
								<input type="password" class="form-control input-custom" id="password1" name="password1" autocomplete="off" value="<?= $user['password']; ?>">
								<?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Password 2</label>
							<div class="col-sm-10">
								<input type="password" class="form-control input-custom" id="password2" name="password2" autocomplete="off" value="<?= $user['password']; ?>">
								<?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Role</label>
							<div class="col-sm-10">
								<?php if ($user['username'] == 'superAdmin') : ?>
									<select class="select-custom custom-select disabled" name="role_id" id="role_id" disabled>
										<?php foreach ($role->result_array() as $role) : ?>
											<option value="<?= $role['role_id']; ?>" <?= ($role['role_id'] == $user['role_id']) ? 'selected' : null ?>><?= $role['deskripsi']; ?></option>
										<?php endforeach; ?>
									</select>
								<?php else : ?>
									<select class="select-custom custom-select" name="role_id" id="role_id">
										<?php foreach ($role->result_array() as $role) : ?>
											<option value="<?= $role['role_id']; ?>" <?= ($role['role_id'] == $user['role_id']) ? 'selected' : null ?>><?= $role['deskripsi']; ?></option>
										<?php endforeach; ?>
									</select>
									<?= form_error('role_id', '<small class="text-danger">', '</small>'); ?>
								<?php endif; ?>
							</div>
						</div>
						<div class="form-group" style="float: right;">
							<button type="submit" class="btn btn-primary btn-md"><i class="far fa-save"></i>&nbsp; Simpan</button>
							<a href="<?= base_url('admin'); ?>"><button type="button" class="btn btn-md btn-danger"><i class="fas fa-undo"></i>&nbsp; Batal</button></a>
						</div>
					</form>
				</div>
			</div>
			<!-- akhir tempat konten utama  -->
		</div>
	</div>

	<!-- </div> -->
