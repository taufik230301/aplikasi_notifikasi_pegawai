<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/components/header.php") ?>
</head>

<body class="sb-nav-fixed">

    <?php if ($this->session->flashdata('success_login')){ ?>
    <script>
    swal({
        title: "Berhasil Login!",
        text: "Anda Behasil Login!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php $this->load->view("admin/components/navbar.php") ?>
    <div id="layoutSidenav">
        <?php $this->load->view("admin/components/sidebar.php") ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    <h2><?=$total_pegawai['total_pegawai']?></h2>
                                </div>
                                <div class="card-body">Pegawai</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?=base_url();?>Pegawai/view_admin">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">
                                    <h2><?=$total_jam_kerja['total_jam_kerja']?></h2>
                                </div>
                                <div class="card-body">Jam Kerja</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?=base_url();?>Jam_Kerja/view_admin">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">
                                    <h2><?=$total_cuti['total_cuti']?></h2>
                                </div>
                                <div class="card-body">Rooster</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?=base_url();?>Cuti/view_admin">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php $this->load->view("admin/components/js.php") ?>
</body>


</html>