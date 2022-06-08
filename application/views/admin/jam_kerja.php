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

    <?php if ($this->session->flashdata('eror_input_jam_kerja')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Gagal Kirim Data!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('input_jam_kerja')){ ?>
    <script>
    swal({
        title: "Berhasil!",
        text: "Data Notifikasi Jam Kerja Berhasil Dikirim!",
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

    <?php $this->load->view("admin/components/navbar.php") ?>
    <div id="layoutSidenav">
        <?php $this->load->view("admin/components/sidebar.php") ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Jam Kerja</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Jam Kerja</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Jam Kerja
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Notif Jam Kerja</th>
                                        <th>Lihat Jam Kerja</th>
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
                                            $jabatan = $i['jabatan'];
                                            $updated_jam_kerja = $i['updated_jam_kerja'];
                                    ?>
                                    <tr>
                                        <td><?=$id?></td>
                                        <td><?=$nama_lengkap?></td>
                                        <td><?=$jabatan?></td>
                                        <td>

                                            <?php 
                                            $now = time(); // or your date as well
                                            $your_date = strtotime($updated_jam_kerja);
                                            $datediff = $now - $your_date;
                                            
                                            $date = round($datediff / (60 * 60 * 24));
                                         
                                        
                         
                                            ?>
                                            <?php if($date > 7){ ?>
                                            <center>
                                                <a href="" data-bs-toggle="modal"
                                                    data-bs-target="#notifikasi_jam_kerja<?=$id_user?>"
                                                    class="btn btn-primary">Notifikasi <i
                                                        class="fas fa-paper-plane"></i>
                                                </a>
                                            </center>

                                            <?php }else{ ?>
                                            <center>
                                                <a href="" class="btn btn-primary"><i class="fas fa-times"></i>
                                                </a>
                                            </center>
                                            <?php } ?>


                                        </td>
                                        <td>
                                            <center> <a href="<?=base_url();?>Jam_Kerja/detail_jam_kerja/<?=$id_user?>"
                                                    type="button" class="btn btn-danger"><i class="fas fa-eye"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="notifikasi_jam_kerja<?=$id_user?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Kirim Notifkasi Jam
                                                        Kerja
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?=base_url();?>Pegawai/notifikasi_jam_kerja"
                                                        method="POST">
                                                        <input type="text" value="<?=$id_user?>" name="id_user" hidden>

                                                        <p>Apakah kamu ingin mengirim notifikasi jam kerja kepada karyawan
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