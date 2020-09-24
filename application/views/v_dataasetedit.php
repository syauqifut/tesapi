<div>
    <div class="card">
        <div class="card-header">
            <strong>Edit</strong> Data
        </div>
        <div class="card-body card-block">
            <form action="<?=base_url('index.php/dataasetedit/edit_dataaset')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                        <label for="kode_aset" class=" form-control-label">Kode Aset</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="kode_aset" name="kode_aset" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="nama_aset" class=" form-control-label">Nama Aset</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nama_aset" name="nama_aset" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="jumlah" class=" form-control-label">Jumlah</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="jumlah" name="jumlah" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="merk" class=" form-control-label">Merk</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="merk" name="merk" class="form-control">
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

