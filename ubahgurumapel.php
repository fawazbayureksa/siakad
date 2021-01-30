<?php
include 'database.php';
$query = mysqli_query($database, "SELECT * FROM data_guru_mapel WHERE nip='$_GET[id]'");
while ($data = mysqli_fetch_assoc($query)) {;

?>
    <div class="content-wrapper">
        <h2 class="text-center">UBAH DATA GURU MATA PELAJARAN </h2>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="number" class="form-control" name="nip" value="<?php echo $data['nip']; ?>" readonly required>
                    </div>
                    <div class="form-group">
                        <label>NAMA GURU </label>
                        <input type="text" class="form-control" name="nama_guru" value="<?php echo $data['nama_guru']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>UMUR</label>
                        <input type="number" class="form-control" name="umur" value="<?php echo $data['umur']  ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="jenis_kelamin" value="laki-laki" />Laki-laki
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="jenis_kelamin" value="Perempuan" />Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Bidang Ilmu</label>
                        <input type="text" class="form-control" name="bidang_ilmu" value="<?php echo $data['bidang_ilmu'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Golongan </label>
                        <input type="text" class="form-control" name="golongan" value="<?php echo $data['golongan'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Status Pengajar</label>

                        <select class="form-control" name="status" required>
                            <option value="<?php echo $data['statuspengajar'] ?>"><?php echo $data['statuspengajar'] ?></option>
                            <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                            <option value="Honorer">Honorer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>GURU KELAS</label>
                        <select class="form-control" name="kelas" placeholder="" required>
                            <option value="<?php echo $data['gurukelas'] ?>"><?php echo $data['gurukelas'] ?></option>
                            <?php
                            $query2 = mysqli_query($database, "SELECT * FROM data_kelas ORDER BY nama_kelas ASC");
                            while ($data2 = mysqli_fetch_assoc($query2)) {
                            ?>
                                <option value="<?= $data2['nama_kelas'] ?>"><?= $data2['nama_kelas'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No Telepon </label>
                        <input type="Number" class="form-control" name="notelp" value="<?php echo $data['notelp'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $data['email'] ?>" required>
                    </div>
                    <button class="btn btn-primary" name="edit">Simpan</button>
                </form>
            <?php } ?>
            </div>
        </div>
    </div>



    <?php
    if (isset($_POST['edit'])) {
        $nip = $_POST['nip'];
        $namaguru = $_POST['nama_guru'];
        $umur = $_POST['umur'];
        $jeniskelamin = $_POST['jenis_kelamin'];
        $bidangilmu = $_POST['bidang_ilmu'];
        $golongan = $_POST['golongan'];
        $status = $_POST['status'];
        $kelas = $_POST['kelas'];
        $notelp = $_POST['notelp'];
        $email = $_POST['email'];

        $query = mysqli_query($database, "UPDATE data_guru_mapel SET  nama_guru='$namaguru',
                                                               umur='$umur',  
                                                               jenis_kelamin='$jeniskelamin',
                                                               bidang_ilmu='$bidangilmu',
                                                               golongan='$golongan',
                                                               statuspengajar='$status',
                                                               gurukelas='$kelas',
                                                               notelp='$notelp',
                                                               email='$email'
                                                               WHERE nip='$nip'");

        echo "<script>alert('ubah data guru Berhasil');</script>";
        echo "<script>location='index.php?Halaman=data_guru_mata_pelajaran';</script>";
    }


    ?>