<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/components/header.php") ?>
</head>

<body class="sb-nav-fixed">

    <?php if ($this->session->flashdata('verifikasi')){ ?>
    <script>
    swal({
        title: "Berhasil Ditambahakan!",
        text: "Data Berhasil Diverifikasi!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_verifikasi')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Gagal Verifikasi Data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php $this->load->view("admin/components/navbar.php") ?>
    <div id="layoutSidenav">
        <?php $this->load->view("admin/components/sidebar.php") ?>
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
                            Data Pegawai Admin
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Mulai Bekerja</th>
                                        <th>Akhir Bekerja</th>
                                        <th>Status Cuti</th>
                                        <th>Status Verifikasi</th>
                                        <th>Aksi</th>
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
                                            $mulai_bekerja = $i['mulai_bekerja'];
                                            $akhir_bekerja = $i['akhir_bekerja'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                    ?>
                                    <tr>
                                        <td><?=$id?></td>
                                        <td><?=$nama_lengkap?></td>
                                        <td><?=$email?></td>

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
                                        <td>
                                            <?php 
                                            $now = time(); // or your date as well
                                            $your_date = strtotime($akhir_bekerja);
                                            $datediff = $your_date - $now;
                                            
                                            $date = round($datediff / (60 * 60 * 24));
                                        
                         
                                            ?>
                                            <?php if($mulai_bekerja and $date < 0){?>
                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#notifikasi_cuti<?=$id_user?>"
                                                class="btn btn-primary">Kirim Notifikasi Cuti <i
                                                    class="fas fa-paper-plane"></i>
                                            </a>
                                            <?php } elseif($mulai_bekerja == NULL) {?>
                                                <button type="button" class="btn btn-danger">Belum Di Set</button>
                                            
                                            <?php } else {?>
                                                <button type="button" class="btn btn-danger">Belum Butuh Cuti</button>
                                            <?php } ?>
                                        </td>
                                        <td><?php  if($id_status_verifikasi == 1){?>
                                            <button type="button" class="btn btn-danger">Belum di verifikasi</button>
                                            <?php }else {?>
                                            <button type="button" class="btn btn-success">Sudah di verifikasi</button>
                                            <?php } ?>
                                        </td>

                                        <td>
                                            <div class="table-responsive">
                                                <div class="table table-striped table-hover ">
                                                    <a href="" data-bs-toggle="modal"
                                                        data-bs-target="#verifikasi<?=$id_user?>"
                                                        class="btn btn-primary">Verifikasi <i class="fas fa-check"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <div class="table table-striped table-hover ">
                                                    <a href="<?=base_url();?>Pegawai/detail_pegawai_admin/<?=$id_user?>"
                                                        class="btn btn-primary">
                                                        Detail <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="verifikasi<?=$id_user?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?=base_url();?>Pegawai/verifikasi_data"
                                                        method="POST">
                                                        <input type="text" value="<?=$id_user?>" name="id_user" hidden>
                                                        <p>Apakah kamu yakin ingin verifikasi data
                                                            ini?</i></b></p>
                                                        <div class="mb-3">
                                                            <label for="alamat" class="form-label">Pesan
                                                                Notifikasi</label>
                                                            <textarea class="form-control"
                                                                placeholder="Leave a comment here"
                                                                id="floatingTextarea2" style="height: 100px"
                                                                name="pesan"></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
    <?php $this->load->view("admin/components/js.php") ?>
</body>

</html>