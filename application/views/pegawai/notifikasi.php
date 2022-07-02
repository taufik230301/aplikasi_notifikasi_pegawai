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
                    <h1 class="mt-4">Riwayat Jam Kerja</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>Dashboard/dashboard_pegawai">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Riwayat Jam Kerja</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Riwayat Jam Kerja HRD
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
            
        </div>
    </div>
    <?php $this->load->view("pegawai/components/js.php") ?>
</body>

</html>