<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("hrd/components/header.php") ?>
</head>

<body class="sb-nav-fixed">
    <?php if ($this->session->flashdata('password_err')){ ?>
    <script>
    swal({
        title: "Error Password!",
        text: "Ketik Ulang Password!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('edit')){ ?>
    <script>
    swal({
        title: "Berhasil Diubah!",
        text: "Data Berhasil Diubah!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_edit')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Gagal Mengubah Data!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php $this->load->view("hrd/components/navbar.php") ?>
    <div id="layoutSidenav">
        <?php $this->load->view("hrd/components/sidebar.php") ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Riwayat Jam Kerja</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?=base_url();?>Dashboard/dashboard_hrd">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Setting Akun</li>
                    </ol>
                    <form action="<?=base_url();?>Settings/proses_settings_hrd" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="re_password" class="form-label">Ulangi Password</label>
                            <input type="password" class="form-control" id="re_password" name="re_password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </main>
           
        </div>
    </div>
    <?php $this->load->view("hrd/components/js.php") ?>
</body>

</html>