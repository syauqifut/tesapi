<h3 class="title-5 m-b-35">DATA ASET</h3>
<div class="table-data__tool">
    <div class="table-data__tool-right">
        <a href="dataasettambah" class="au-btn au-btn-icon au-btn--green au-btn--small" ><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
    </div>
</div>
<div style="overflow-x:auto;">
<div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Kode Aset</th>
                <th>Nama Aset</th>
                <th>Jumlah</th>
                <th>Merk</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($data as $list){
                echo '
                    <tr>
                        <td>'.$list->id.'</td>
                        <td>'.$list->kode_aset.'</td>
                        <td>'.$list->nama_aset.'</td>
                        <td>'.$list->jumlah.'</td>
                        <td>'.$list->merk.'</td>
                        <td>'.$list->desc.'</td>
                        <td>
                            <div class="table-data-feature">
                                <a href ="'.base_url('index.php/dataaset/detail_dataaset/'.$list->id).'" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <a href="'.base_url('index.php/dataaset/hapus_dataaset/'.$list->id).'" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                            </div>
                        </td>
                ';
            }
        ?>
        </tbody>
    </table>
</div>
</div>

