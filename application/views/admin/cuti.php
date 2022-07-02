<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/components/header.php") ?>
</head>

<body class="sb-nav-fixed">
    <?php $this->load->view("admin/components/navbar.php") ?>
    <div id="layoutSidenav">
        <?php $this->load->view("admin/components/sidebar.php") ?>
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
                            Data Rooster Admin
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
                                        <th>Aksi</th>
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
                                        <td>
                                            <div class="table-responsive">
                                                <div class="table table-striped table-hover ">
                                                    <a href="" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">
                                                        Edit <i class="nav-icon fas fa-edit"></i>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <div class="table table-striped table-hover ">
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        class="btn btn-danger">Hapus <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
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
    <?php $this->load->view("admin/components/js.php") ?>
</body>

</html>