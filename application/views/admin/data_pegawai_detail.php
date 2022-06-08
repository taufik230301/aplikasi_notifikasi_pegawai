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
                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#notifikasi_cuti<?=$id_user?>"
                                                class="btn btn-primary">Kirim Notifikasi Cuti <i
                                                    class="fas fa-paper-plane"></i>
                                            </a>
                                        </td>
                                        <td></td>
                                        <td style="text-align: right;"> <a href="" data-bs-toggle="modal"
                                                data-bs-target="#edit<?=$id_user?>" class="btn btn-primary">Edit <i
                                                    class="fas fa-edit"></i>
                                            </a>
                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#notifikasi_cuti<?=$id_user?>"
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
                                                    <form action="<?=base_url();?>Pegawai/edit_pegawai"
                                                        method="POST">
                                                        <input type="text" value="<?=$id_user?>" name="id_user" hidden>
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="email" class="form-control"
                                                                id="nama">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1"
                                                                class="form-label">Password</label>
                                                            <input type="password" class="form-control"
                                                                id="exampleInputPassword1">
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