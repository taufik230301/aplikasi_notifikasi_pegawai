<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("pegawai/components/header.php") ?>
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

    <?php $this->load->view("pegawai/components/navbar.php") ?>
    <div id="layoutSidenav">
        <?php $this->load->view("pegawai/components/sidebar.php") ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard Pegawai</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    <h2><?=$total_jam_kerja['total_jam_kerja']?></h2>
                                </div>
                                <div class="card-body">Jam Kerja</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?=base_url();?>Jam_Kerja/view_pegawai/<?=$this->session->userdata('id_user');?>">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">
                                    <h2><?=$total_cuti['total_cuti']?></h2>
                                </div>
                                <div class="card-body">Cuti</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?=base_url();?>Cuti/view_pegawai/<?=$this->session->userdata('id_user');?>">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php $this->load->view("pegawai/components/js.php") ?>
</body>

</html>