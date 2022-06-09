<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("hrd/components/header.php") ?>
</head>

<body class="sb-nav-fixed">
    <?php $this->load->view("hrd/components/navbar.php") ?>
    <div id="layoutSidenav">
        <?php $this->load->view("hrd/components/sidebar.php") ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Pegawai</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Pegawai</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Pegawai
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jabatan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Telepon</th>
                                        <th>Alamat</th>
                                        <th>Mulai Bekerja</th>
                                        <th>Akhir Bekerja</th>
                                        <th>Status Verifikasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                            $id = 0;
                                            foreach($user as $i)
                                            :
                                            $id++;
                                            $id_user = $i['id_user'];
                                            $nama_lengkap = $i['nama_lengkap'];
                                            $email = $i['email'];
                                            $jabatan = $i['jabatan'];
                                            $jenis_kelamin = $i['jenis_kelamin'];
                                            $no_telp = $i['no_telp'];
                                            $alamat = $i['alamat'];
                                            $mulai_bekerja = $i['mulai_bekerja'];
                                            $akhir_bekerja = $i['akhir_bekerja'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                    ?>
                                    <tr>
                                        <td><?=$id?></td>
                                        <td><?=$nama_lengkap?></td>
                                        <td><?=$jabatan?></td>
                                        <td><?=$jenis_kelamin?></td>
                                        <td><?=$no_telp?></td>
                                        <td><?=$alamat?></td>
                                        <td><?php  if($mulai_bekerja == NULL){?>
                                            <button type="button" class="btn btn-danger">Belum di isi</button>
                                            <?php }else {?>
                                            <?=$mulai_bekerja?>
                                            <?php } ?>
                                        </td>
                                        <td><?php  if($akhir_bekerja == NULL){?>
                                            <button type="button" class="btn btn-danger">Belum di isi</button>
                                            <?php }else {?>
                                            <?= $akhir_bekerja?>
                                            <?php } ?>
                                        </td>
                                        <td><?php  if($id_status_verifikasi == 1){?>
                                            <button type="button" class="btn btn-danger">Belum di verifikasi</button>
                                            <?php }else {?>
                                            <button type="button" class="btn btn-success">Sudah di verifikasi</button>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php $this->load->view("hrd/components/js.php") ?>
</body>

</html>