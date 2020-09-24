<h3 class="title-5 m-b-35">DATA ADMIN</h3>
<div class="table-data__tool">
    <div class="table-data__tool-right">
        <a href="admintambah" class="au-btn au-btn-icon au-btn--green au-btn--small" ><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
    </div>
</div>
<div style="overflow-x:auto;">
<div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Nomor HP</th>
                <th>Alamat</th>
                <th>Deskripsi</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
                <!-- <td>
                    <div class="table-data-feature">
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                            <i class="zmdi zmdi-mail-send"></i>
                        </button>
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="zmdi zmdi-edit"></i>
                        </button>
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                            <i class="zmdi zmdi-delete"></i>
                        </button>
                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                            <i class="zmdi zmdi-more"></i>
                        </button>
                    </div>
                </td> -->
                <!-- <td><a href="#update_ekstra" class="btn btn-warning" data-toggle="modal" onclick="detail('.$list->id.')">Update</a>
                            <a href="'.base_url('index.php/ekstra/hapus_ekstra/'.$list->id).'" class="btn btn-danger" data-toggle="modal" onclick="return confirm(\'anda yakin\')">Delete</a>
                        </td> -->
            <?php 
            foreach ($data as $list){
                echo '
                    <tr>
                        <td>'.$list->id.'</td>
                        <td>'.$list->nama.'</td>
                        <td>'.$list->username.'</td>
                        <td>'.$list->password.'</td>
                        <td>'.$list->email.'</td>
                        <td>'.$list->no_hp.'</td>
                        <td>'.$list->alamat.'</td>
                        <td>'.$list->desc.'</td>
                        <td>'.$list->role.'</td>
                        <td>
                            <div class="table-data-feature">
                                <a href ="'.base_url('index.php/admin/detail_admin/'.$list->id).'" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                <a href="'.base_url('index.php/admin/hapus_admin/'.$list->id).'" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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

