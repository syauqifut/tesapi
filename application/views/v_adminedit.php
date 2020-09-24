<div>
    <div class="card">
        <div class="card-header">
            <strong>Edit</strong> Admin
        </div>
        <div class="card-body card-block">
        <form action="<?=base_url('index.php/adminedit/edit_admin')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="id" class=" form-control-label">Id</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="id" name="id" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="nama" class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="username" class=" form-control-label">Username</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="username" name="username" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password" class=" form-control-label">Password</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="email" class=" form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="no_hp" class=" form-control-label">Nomor HP</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="no_hp" name="no_hp" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="alamat" class=" form-control-label">Alamat</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="alamat" id="alamat" rows="4" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="desc" class=" form-control-label">Deskripsi</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="desc" id="desc" rows="4" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="role" class=" form-control-label">Role</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="role" name="role" class="form-control">
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

<script>
  function detail(id){
    $.getJSON("<?=base_url()?>index.php/admin/detail_admin/"+id,function(data){
      $("#id").val(data['id']);
      $("#nama").val(data['nama']);
      $("#username").val(data['username']);
      $("#password").val(data['password']);
      $("#email").val(data['email']);
      $("#no_hp").val(data['no_hp']);
      $("#alamat").val(data['alamat']);
      $("#desc").val(data['desc']);
    });
  }
</script>