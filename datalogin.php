<?php
include 'session.php';
include 'database.php';
?>

<style>
    th {
        text-align: center;
    }

    td {
        text-align: center;
    }

    .card-header {
        background-color: #117c6f;
        color: white;
    }
</style>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                       <div class="card-title">DATA USER</div>
                       <h4 class="text-right"><a href="index.php?Halaman=tambah_data_admin" class="btn btn-primary btn-sm"><i class="fa fa-user-plus"></i> Tambah User</a></h4>
                    </div>
                    <div class="card-body">
                        <div class="table responsive">
                        <table class="table table-hover" id="example2">
                            <thead class="thead-light">
                                <tr>

                                    <th>Username</th>
                                    <th>Level</th>
                                    <th width="40%"><i class="fa fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $query = mysqli_query($database,"SELECT * FROM admin ORDER BY level ASC");
                                while ($data = mysqli_fetch_assoc($query)){ ?>
                               
                                <tr>
                                    <td><?php echo $data['username'] ?></td>
                                    <td>
                                        <?php if ($data['level'] == 1 ) {
                                            echo "Admin";
                                            # code...
                                        } elseif ($data['level'] == 2 ) {
                                            echo "Guru";
                                        } elseif ($data['level'] == 3) {
                                            echo "Siswa";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="index.php?Halaman=hapus_data_admin&id=<?php echo $data['id_admin'];?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                    <?php if ($_SESSION['login']['level']== 1)  {?>
                         <div class="card-footer">
                        
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
</div>
