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
        text: "Data Notifikasi Cuti Berhasil Dikirim!",
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

    <?php if ($this->session->flashdata('edit')){ ?>
    <script>
    swal({
        title: "Berhasil!",
        text: "Data Berhasil Diedit!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_edit')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Data Gagal Diedit!",
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
                            <table id="sample" style="width:100%">
                                <tbody>
                                    <tr>
                                        <th style="width:40%"></th>
                                        <th style="width:20%"></th>
                                        <th></th>

                                    </tr>
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
                                            $title_posisi = $i['title_posisi'];
                                            $jenis_kelamin = $i['jenis_kelamin'];
                                            $no_telp = $i['no_telp'];
                                            $alamat = $i['alamat'];
                                            $mulai_bekerja = $i['mulai_bekerja'];
                                            $akhir_bekerja = $i['akhir_bekerja'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                    ?>
                                    <tr>
                                        <td>
                                            <h4>Nama</h4>
                                        </td>
                                        <td>
                                            <h4>:</h4>
                                        </td>
                                        <td>
                                            <h4><?=$nama_lengkap?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Email </h4>
                                        </td>
                                        <td>
                                            <h4>:</h4>
                                        </td>
                                        <td>
                                            <h4><?=$email?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Jabatan </h4>
                                        </td>
                                        <td>
                                            <h4>:</h4>
                                        </td>
                                        <td>
                                            <h4><?=$jabatan?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Title Posisi </h4>
                                        </td>
                                        <td>
                                            <h4>:</h4>
                                        </td>
                                        <td>
                                            <h4><?=$title_posisi?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Jenis Kelamin </h4>
                                        </td>
                                        <td>
                                            <h4>:</h4>
                                        </td>
                                        <td>
                                            <h4><?=$jenis_kelamin?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>No Telepon </h4>
                                        </td>
                                        <td>
                                            <h4>:</h4>
                                        </td>
                                        <td>
                                            <h4><?=$no_telp?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Alamat </h4>
                                        </td>
                                        <td>
                                            <h4>:</h4>
                                        </td>
                                        <td>
                                            <h4><?=$alamat?></h4>
                                        </td>
                                    </tr>
                                    <tr>
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
                                        <td></td>
                                        <td style="text-align: right;"> <a href="" data-bs-toggle="modal"
                                                data-bs-target="#edit<?=$id_user?>" class="btn btn-primary">Edit <i
                                                    class="fas fa-edit"></i>
                                            </a>
                                            <a href="" data-bs-toggle="modal" data-bs-target="#hapus<?=$id_user?>"
                                                class="btn btn-danger">Hapus <i class="fas fa-trash"></i>
                                            </a></td>
                                    </tr>
                                    <div class="modal fade" id="edit<?=$id_user?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Pegawai
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?=base_url();?>Pegawai/edit_pegawai_admin"
                                                        method="POST">
                                                        <input type="text" value="<?=$id_user?>" name="id_user" hidden>
                                                        <div class="mb-3">
                                                            <label for="nama_lengkap" class="form-label">Nama
                                                                Lengkap</label>
                                                            <input type="text" class="form-control" id="nama_lengkap"
                                                                name="nama_lengkap" value="<?=$nama_lengkap?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="username" class="form-label">Username</label>
                                                            <input type="text" class="form-control" id="username"
                                                                name="username" value="<?=$username?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email" value="<?=$email?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="jabatan" class="form-label">Jabatan</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example" name="jabatan" required>
                                                                <option value="Supply Chain Management">Supply Chain
                                                                    Management</option>
                                                                <option value="Site It Support">Site It Support</option>
                                                                <option value="Site Human Resource & General Affair">
                                                                    Site Human Resource & General
                                                                    Affair</option>
                                                                <option value="Site Finance & Accounting">Site Finance &
                                                                    Accounting </option>
                                                                <option value="Reporting & Gov. Relation">Reporting &
                                                                    Gov. Relation</option>

                                                                <option value="Plant Maintenance">Plant Maintenance
                                                                </option>
                                                                <option value="Mine Operation">Mine Operation</option>
                                                                <option value="Mine Engineering ">Mine Engineering
                                                                </option>
                                                                <option value="Management Operation">Management
                                                                    Operation</option>
                                                                <option value="Health Safety Security Environment ">
                                                                    Health Safety Security
                                                                    Environment </option>
                                                                <option value="External Relation, Csr & Security">
                                                                    External Relation, Csr & Security
                                                                </option>
                                                                <option value="Civil Project Lahat">Civil Project Lahat
                                                                </option>

                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="title_posisi" class="form-label">Title
                                                                Posisi</label>
                                                            <input type="text" class="form-control" id="title_posisi"
                                                                name="title_posisi" value="<?=$title_posisi?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="jenis_kelamin" class="form-label">Jenis
                                                                Kelamin</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example"
                                                                name="jenis_kelamin" required>
                                                                <option value="L">L</option>
                                                                <option value="P">P</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="no_telp" class="form-label">Nomor HP</label>
                                                            <input type="text" class="form-control" id="no_telp"
                                                                name="no_telp" value="<?=$no_telp?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="alamat" class="form-label">Alamat</label>
                                                            <textarea class="form-control"
                                                                placeholder="Leave a comment here"
                                                                id="floatingTextarea2" style="height: 100px"
                                                                name="alamat" required><?=$alamat?></textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="mulai_bekerja" class="form-label">Mulai
                                                                Bekerja</label>
                                                            <input type="date" class="form-control" id="mulai_bekerja"
                                                                name="mulai_bekerja" value="<?=$mulai_bekerja?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="akhir_bekerja" class="form-label">Akhir
                                                                Bekerja</label>
                                                            <input type="date" class="form-control" id="akhir_bekerja"
                                                                name="akhir_bekerja" value="<?=$akhir_bekerja?>" required>
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Kirim Notifkasi Cuti
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?=base_url();?>Pegawai/notifikasi_cuti"
                                                        method="POST">
                                                        <input type="text" value="<?=$id_user?>" name="id_user" hidden>
                                                        <input type="text" value="<?=$email?>" name="email" hidden>
                                                        
                                                        <input type="text" value="<?=$mulai_bekerja?>"
                                                            name="mulai_bekerja" hidden>
                                                        <input type="text" value="<?=$akhir_bekerja?>"
                                                            name="akhir_bekerja" hidden>
                                                        <p>Apakah kamu ingin mengirim notifikasi cuti kepada karyawan
                                                            ini?</i></b></p>
                                                        <div class="mb-3">
                                                            <label for="awal_cuti" class="form-label">Awal Cuti</label>
                                                            <input type="date" class="form-control" id="awal_cuti"
                                                                name="awal_cuti">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="berakhir_cuti" class="form-label">Berakhir
                                                                Cuti</label>
                                                            <input type="date" class="form-control" id="berakhir_cuti"
                                                                name="berakhir_cuti">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="perihal" class="form-label">Perihal Cuti</label>
                                                            <input type="text" class="form-control" id="perihal"
                                                                name="perihal">
                                                        </div>
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
                                    <div class="modal fade" id="hapus<?=$id_user?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Pegawai
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?=base_url();?>Pegawai/hapus_pegawai_admin"
                                                        method="POST">
                                                        <input type="text" value="<?=$id_user?>" name="id_user" hidden>

                                                        <p>Apakah kamu ingin menghapus data karyawan
                                                            ini?</i></b></p>

                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger">Submit</button>
                                                            <button type="button" class="btn btn-success"
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