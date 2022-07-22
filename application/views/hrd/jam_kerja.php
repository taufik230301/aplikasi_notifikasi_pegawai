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
                    <h1 class="mt-4">Laporan Jam Kerja</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>Dashboard/dashboard_hrd">Dashboard</a></li>
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
                                            <center> <a href="<?=base_url();?>Jam_Kerja/detail_jam_kerja_hrd/<?=$id_user?>"
                                                    type="button" class="btn btn-danger"><i class="fas fa-eye"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
           
        </div>
    </div>
    <?php $this->load->view("hrd/components/js.php") ?>
</body>

</html>