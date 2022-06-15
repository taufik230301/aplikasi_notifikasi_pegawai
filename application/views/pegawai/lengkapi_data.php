<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("pegawai/components/header.php") ?>
</head>

<body class="sb-nav-fixed">

    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Berhasil Ditambahakan!",
        text: "Data Berhasil Ditambahkan!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_input')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Gagal Menambahkan Data!",
        icon: "error"
    });
    </script>
    <?php } ?>

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
                        <?php
                                            $id = 0;
                                            foreach($pegawai as $i)
                                            :
                                            $id++;
                                            $id_user = $i['id_user'];
                                            $nama_lengkap = $i['nama_lengkap'];
                                            $title_posisi = $i['title_posisi'];
                                            $jenis_kelamin = $i['jenis_kelamin'];
                                            $no_telp = $i['no_telp'];
                                            $alamat = $i['alamat'];
                                            $email = $i['email'];
                                            $jabatan = $i['jabatan'];
                                            $mulai_bekerja = $i['mulai_bekerja'];
                                            $akhir_bekerja = $i['akhir_bekerja'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                    ?>
                        <form action="<?=base_url();?>Lengkapi_Data/regist_input" method="POST">
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?=$nama_lengkap?>" <?php  if($id_status_verifikasi == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo 'required';
                                    }  ?>>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select class="form-select" aria-label="Default select example" name="jabatan" <?php  if($id_status_verifikasi == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo 'required';
                                    }  ?>>
                                    <option value="Supply Chain Management"  <?php  if($jabatan == 'Supply Chain Management'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Supply Chain Management</option>
                                    <option value="Site It Support"  <?php  if($jabatan == 'Site It Support'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Site It Support</option>
                                    <option value="Site Human Resource & General Affair" <?php  if($jabatan == 'Site Human Resource & General Affair'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Site Human Resource & General
                                        Affair</option>
                                    <option value="Site Finance & Accounting" <?php  if($jabatan == 'Site Finance & Accounting'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Site Finance & Accounting </option>
                                    <option value="Reporting & Gov. Relation" <?php  if($jabatan == 'Reporting & Gov. Relation'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Reporting & Gov. Relation</option>

                                    <option value="Plant Maintenance" <?php  if($jabatan == 'Plant Maintenance'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Plant Maintenance</option>
                                    <option value="Mine Operation" <?php  if($jabatan == 'Mine Operation'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Mine Operation</option>
                                    <option value="Mine Engineering" <?php  if($jabatan == 'Mine Engineering'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Mine Engineering </option>
                                    <option value="Management Operation" <?php  if($jabatan == 'Management Operation'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Management Operation</option>
                                    <option value="Health Safety Security Environment" <?php  if($jabatan == 'Health Safety Security Environment'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Health Safety Security
                                        Environment </option>
                                    <option value="External Relation, Csr & Security" <?php  if($jabatan == 'External Relation, Csr & Security'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>External Relation, Csr & Security
                                    </option>
                                    <option value="Civil Project Lahat" <?php  if($jabatan == 'Civil Project Lahat'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Civil Project Lahat</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="title_posisi" class="form-label">Title Posisi</label>
                                <input type="text" class="form-control" id="title_posisi" name="title_posisi" value="<?=$title_posisi?>" <?php  if($id_status_verifikasi == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo 'required';
                                    }  ?>>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" aria-label="Default select example" name="jenis_kelamin" value="<?=$jenis_kelamin?>" <?php  if($id_status_verifikasi == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo 'required';
                                    }  ?>>
                                    <option value="L" <?php  if($jenis_kelamin == 'L'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>L</option>
                                    <option value="P" <?php  if($jenis_kelamin == 'P'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>P</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="no_telp" class="form-label">Nomor HP</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?=$no_telp?>" <?php  if($id_status_verifikasi == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo 'required';
                                    }  ?>>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                    style="height: 100px" name="alamat" <?php  if($id_status_verifikasi == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo 'required';
                                    }  ?>><?=$alamat?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <?php endforeach;?>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php $this->load->view("pegawai/components/js.php") ?>
</body>

</html>