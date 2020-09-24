<div>
    <div class="card">
        <div class="card-header">
            <strong>Tambah</strong> Data
        </div>
        <div class="card-body card-block">
            <form action="<?=base_url('index.php/dataasettambah/tambah_dataaset')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="kode_aset-input" class=" form-control-label">Kode Aset</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="kode_aset-input" name="kode_aset" placeholder="Kode Aset" class="form-control">
                        <small class="form-text text-muted">Masukkan Kode Aset</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="nama_aset-input" class=" form-control-label">Nama Aset</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nama_aset-input" name="nama_aset" placeholder="Nama Aset" class="form-control">
                        <small class="form-text text-muted">Masukkan Nama Aset</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="jumlah-input" class=" form-control-label">Jumlah</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="jumlah-input" name="jumlah" placeholder="Jumlah" class="form-control">
                        <small class="form-text text-muted">Masukkan Jumlah</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="merk-input" class=" form-control-label">Merk</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="merk-input" name="merk" placeholder="Merk" class="form-control">
                        <small class="help-block form-text">Masukkan Merk</small>
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