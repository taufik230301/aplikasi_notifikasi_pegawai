<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/components/header.php") ?>
</head>

<body class="sb-nav-fixed">

<?php if ($this->session->flashdata('input_cuti')){ ?>
    <script>
    swal({
        title: "Berhasil!",
        text: "Data Notifikasi Rooster Berhasil Dikirim!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_input_cuti')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Gagal Kirim Data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('delete')){ ?>
    <script>
    swal({
        title: "Berhasil Dihapus!",
        text: "Data Berhasil Dihapus!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_insert')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Gagal Menambahkan Data!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('insert')){ ?>
    <script>
    swal({
        title: "Berhasil Ditambahkan!",
        text: "Data Berhasil Ditambahkan!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_delete')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Gagal Menghapus Data!",
        icon: "error"
    });
    </script>
    <?php } ?>
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
    
    <?php if ($this->session->flashdata('error_send')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Gagal Mengirim Verifikasi Data!",
        icon: "error"
    });
    </script>
    <?php } ?>



    <?php if ($this->session->flashdata('error_send')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Gagal Mengirim Verifikasi Data!",
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
                    <h1 class="mt-4">Rooster Karyawan</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>Dashboard/dashboard_admin">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Data Rooster Karyawan</li>
                    </ol>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#tambah_pegawai">
                        Tambah Data
                    </button>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Karyawan Admin
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Mulai Bekerja</th>
                                        <th>Akhir Bekerja</th>
                                        <th>Status Rooster</th>
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
                                            $username = $i['username'];
                                            $email = $i['email'];
                                            $jabatan = $i['jabatan'];
                                            $mulai_bekerja = $i['mulai_bekerja'];
                                            $akhir_bekerja = $i['akhir_bekerja'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                    ?>
                                    <tr>
                                        <td><?=$id?></td>
                                        <td><?php  if($nama_lengkap == NULL){?>
                                            <button type="button" class="btn btn-danger">Belum di isi</button>
                                            <?php }else {?>
                                            <?=$nama_lengkap?>
                                            <?php } ?>
                                        </td>

                                        <td><?php  if($username == NULL){?>
                                            <button type="button" class="btn btn-danger">Belum di isi</button>
                                            <?php }else {?>
                                            <?=$username?>
                                            <?php } ?>
                                        </td>

                                        <td><?php  if($email == NULL){?>
                                            <button type="button" class="btn btn-danger">Belum di isi</button>
                                            <?php }else {?>
                                            <?=$email?>
                                            <?php } ?>
                                        </td>

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
                                                class="btn btn-primary">Kirim Notifikasi Rooster <i
                                                    class="fas fa-paper-plane"></i>
                                            </a>
                                            <?php } elseif($mulai_bekerja == NULL) {?>
                                            <button type="button" class="btn btn-danger">Belum Di Set</button>

                                            <?php } else {?>
                                            <button type="button" class="btn btn-danger">Belum Butuh Rooster</button>
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
                                            <!-- <div class="table-responsive">
                                                <div class="table table-striped table-hover ">
                                                    <?php 
                                            $now = time(); // or your date as well
                                            $your_date = strtotime($akhir_bekerja);
                                            $datediff = $your_date - $now;
                                            
                                            $date = round($datediff / (60 * 60 * 24));
                                        
                         
                                            ?>
                                                    <?php if($mulai_bekerja and $date < 0){?>
                                                    <a href="" data-bs-toggle="modal"
                                                        data-bs-target="#notifikasi_cuti<?=$id_user?>"
                                                        class="btn btn-primary">Kirim Notifikasi Rooster <i
                                                            class="fas fa-paper-plane"></i>
                                                    </a>
                                                    <?php } elseif($mulai_bekerja == NULL) {?>
                                                    <button type="button" class="btn btn-danger">Belum Di Set</button>

                                                    <?php } else {?>
                                                    <button type="button" class="btn btn-danger">Belum Butuh
                                                        Rooster</button>
                                                    <?php } ?>
                                                </div>
                                            </div> -->
                                        </td>

                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="verifikasi<?=$id_user?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Verifikasi Data
                                                        Karyawan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?=base_url();?>Pegawai/verifikasi_data"
                                                        method="POST">
                                                        <input type="text" value="<?=$id_user?>" name="id_user" hidden>
                                                        <input type="text" value="<?=$email?>" name="email" hidden>
                                                        <p>Apakah kamu yakin ingin verifikasi data
                                                            ini?</i></b></p>
                                                        <div class="mb-3">
                                                            <label for="pesan" class="form-label">Pesan
                                                                Notifikasi</label>
                                                            <textarea class="form-control"
                                                                placeholder="Leave a comment here"
                                                                id="floatingTextarea2" style="height: 100px"
                                                                name="pesan" required>Kepada yang terhormat Bpk/Ibu <?=$nama_lengkap?> Data yang anda kirim sudah diverifikasi admin, 
harap cek berkala dengan login ke aplikasi secara berkala, Trimakasih.</textarea>
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
                                    <div class="modal fade" id="notifikasi_cuti<?=$id_user?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Kirim Notifkasi
                                                        Rooster
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?=base_url();?>Pegawai/notifikasi_cuti"
                                                        method="POST">
                                                        <input type="text" value="<?=$id_user?>" name="id_user" hidden>
                                                        <input type="text" value="<?=$email?>" name="email" hidden>
                                                        <input type="text" value="<?=$nama_lengkap?>"
                                                            name="nama_lengkap" hidden>

                                                        <input type="text" value="<?=$mulai_bekerja?>"
                                                            name="mulai_bekerja" hidden>
                                                        <input type="text" value="<?=$akhir_bekerja?>"
                                                            name="akhir_bekerja" hidden>
                                                        <p>Apakah kamu ingin mengirim notifikasi cuti kepada karyawan
                                                            ini?</i></b></p>
                                                        <div class="mb-3">
                                                            <label for="awal_cuti" class="form-label">Awal
                                                                Rooster</label>
                                                            <input type="date" class="form-control" id="awal_cuti"
                                                                name="awal_cuti" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="berakhir_cuti" class="form-label">Berakhir
                                                                Rooster</label>
                                                            <input type="date" class="form-control" id="berakhir_cuti"
                                                                name="berakhir_cuti" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="perihal" class="form-label">Perihal
                                                                Rooster</label>
                                                            <input type="text" class="form-control" id="perihal"
                                                                name="perihal" required>
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
            <div class="modal fade" id="tambah_pegawai" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Karyawan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?=base_url();?>Pegawai/tambah_pegawai" method="POST">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <select class="form-select" aria-label="Default select example" name="jabatan"
                                        required>
                                        <option value="Supply Chain Management">Supply Chain Management</option>
                                        <option value="Site It Support">Site It Support</option>
                                        <option value="Site Human Resource & General Affair">Site Human Resource &
                                            General
                                            Affair</option>
                                        <option value="Site Finance & Accounting">Site Finance & Accounting </option>
                                        <option value="Reporting & Gov. Relation">Reporting & Gov. Relation</option>

                                        <option value="Plant Maintenance">Plant Maintenance</option>
                                        <option value="Mine Operation">Mine Operation</option>
                                        <option value="Mine Engineering ">Mine Engineering </option>
                                        <option value="Management Operation">Management Operation</option>
                                        <option value="Health Safety Security Environment ">Health Safety Security
                                            Environment </option>
                                        <option value="External Relation, Csr & Security">External Relation, Csr &
                                            Security
                                        </option>
                                        <option value="Civil Project Lahat">Civil Project Lahat</option>

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="title_posisi" class="form-label">Title Posisi</label>
                                    <input type="text" class="form-control" id="title_posisi" name="title_posisi"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin"
                                        required>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">Nomor HP</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea2" style="height: 100px" name="alamat" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php $this->load->view("admin/components/js.php") ?>
</body>

</html>