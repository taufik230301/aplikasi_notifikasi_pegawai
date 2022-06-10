<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("pegawai/components/header.php") ?>
</head>

<body class="sb-nav-fixed">
    <?php $this->load->view("pegawai/components/navbar.php") ?>
    <div id="layoutSidenav">
        <?php $this->load->view("pegawai/components/sidebar.php") ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Log Notifikasi</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Log Notifikasi</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Log Notifikasi HRD
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User Penerima</th>
                                        <th>Pesan</th>
                                        <th>Kategori Notifikasi</th>
                                        <th>Tanggal Kirim</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                            $id = 0;
                                            foreach($notifikasi as $i)
                                            :
                                            $id++;
                                            $nama_lengkap = $i['nama_lengkap'];
                                            $pesan = $i['pesan'];
                                            $kategori_notifikasi = $i['kategori_notifikasi'];
                                            $date_created = $i['date_created'];
                                           
                                    ?>
                                    <tr>
                                        <td><?=$id?></td>
                                        <td><?=$nama_lengkap?></td>
                                        <td><?=$pesan?></td>
                                        <td><?=$kategori_notifikasi?></td>
                                        <td><?=$date_created?></td>
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
    <?php $this->load->view("pegawai/components/js.php") ?>
</body>

</html>