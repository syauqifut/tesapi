<div>
    <div class="card">
        <div class="card-header">
            <strong>Tambah</strong> Admin
        </div>
        <div class="card-body card-block">
            <form action="<?=base_url('index.php/admintambah/tambah_admin')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="nama-input" class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nama-input" name="nama" placeholder="Nama" class="form-control">
                        <small class="form-text text-muted">Masukkan Nama</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="username-input" class=" form-control-label">Username</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="username-input" name="username" placeholder="Username" class="form-control">
                        <small class="form-text text-muted">Masukkan Username</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-password" class=" form-control-label">Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="password" id="password-input" name="password" placeholder="Password" class="form-control">
                        <small class="form-text text-muted">Masukkan Password</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email-input" class=" form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="email-input" name="email" placeholder="Email" class="form-control">
                        <small class="help-block form-text">Masukkan Email</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="no_hp-input" class=" form-control-label">Nomor HP</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="no_hp-input" name="no_hp" placeholder="Nomor HP" class="form-control">
                        <small class="help-block form-text">Masukkan Nomor HP</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="alamat-input" class=" form-control-label">Alamat</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="alamat" id="alamat-input" rows="4" placeholder="Alamat..." class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="desc-input" class=" form-control-label">Deskripsi</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="desc" id="desc-input" rows="4" placeholder="Deskripsi..." class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="role-input" class=" form-control-label">Role</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="role-input" name="role" placeholder="Role" class="form-control">
                        <small class="help-block form-text">Masukkan Role</small>
                    </div>
                </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </div>
</div>