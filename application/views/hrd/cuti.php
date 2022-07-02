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
                    <h1 class="mt-4">Rooster</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>Dashboard/dashboard_admin">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Rooster</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Rooster
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Perihal</th>
                                        <th>Tanggal Dikirim</th>
                                        <th>Tanggal Mulai Rooster</th>
                                        <th>Tanggal Berakhir Rooster</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                            $id = 0;
                                            foreach($cuti as $i)
                                            :
                                            $id++;
                                            $id_cuti = $i['id_cuti'];
                                            $id_user = $i['id_user'];
                                            $nama_lengkap = $i['nama_lengkap'];
                                            $perihal = $i['perihal'];
                                            $tgl_dikirim = $i['tgl_dikirim'];
                                            $mulai = $i['mulai'];
                                            $berakhir = $i['berakhir'];
                                    ?>
                                    <tr>
                                        <td><?=$id?></td>
                                        <td><?=$nama_lengkap?></td>
                                        <td><?=$perihal?></td>
                                        <td><?=$tgl_dikirim?></td>
                                        <td><?=$mulai?></td>
                                        <td><?=$berakhir?></td>
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
    <?php $this->load->view("hrd/components/js.php") ?>
</body>

</html>