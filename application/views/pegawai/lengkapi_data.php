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
                    <h1 class="mt-4">Form Data Pegawai</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Lengkapi Data</li>
                    </ol>
                    <div class="row">
                        <form>
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="email" class="form-control" id="nama_lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select class="form-select" aria-label="Default select example" name="jabatan">
                                    <option value="Supply Chain Management">Supply Chain Management</option>
                                    <option value="Site It Support">Site It Support</option>
                                    <option value="Site Human Resource & General Affair  ">Site Human Resource & General
                                        Affair</option>
                                    <option value="Site Finance & Accounting ">Site Finance & Accounting </option>
                                    <option value="Reporting & Gov. Relation">Reporting & Gov. Relation</option>

                                    <option value="Plant Maintenance">Plant Maintenance</option>
                                    <option value="Mine Operation">Mine Operation</option>
                                    <option value="Mine Engineering ">Mine Engineering </option>
                                    <option value="Management Operation">Management Operation</option>
                                    <option value="Health Safety Security Environment ">Health Safety Security
                                        Environment </option>
                                    <option value="External Relation, Csr & Security">External Relation, Csr & Security
                                    </option>
                                    <option value="Civil Project Lahat">Civil Project Lahat</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="no_telp" class="form-label">Nomor HP</label>
                                <input type="email" class="form-control" id="no_telp">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                    style="height: 100px" name="alamat"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php $this->load->view("pegawai/components/js.php") ?>
</body>

</html>