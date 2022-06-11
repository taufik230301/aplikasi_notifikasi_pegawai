<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/components/header.php") ?>
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
    <?php if ($this->session->flashdata('edit')){ ?>
    <script>
    swal({
        title: "Berhasil Diedit!",
        text: "Data Berhasil Diedit!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_edit')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Gagal Mengedit Data!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('hapus')){ ?>
    <script>
    swal({
        title: "Berhasil Dihapus!",
        text: "Data Berhasil Dihapus!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_hapus')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Gagal Menghapus Data!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php $this->load->view("admin/components/navbar.php") ?>
    <div id="layoutSidenav">
        <?php $this->load->view("admin/components/sidebar.php") ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Jam Kerja</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Jam Kerja</li>

                    </ol>
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Tambah Data
                    </button>
                    <div class="card mb-4 mt-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Jam Kerja <?php
                            
                            if($jam_kerja == NULL){
                                echo "Kosong";
                            }else{
                                echo $jam_kerja[0]['nama_lengkap'];
                            }
                            
                            ?>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jam Mulai Bekerja</th>
                                        <th>Jam Akhir Bekerja</th>
                                        <th>Hari</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                            $id = 0;
                                            foreach($jam_kerja as $i)
                                            :
                                            $id++;
                                            $id_user = $i['id_user'];
                                            $id_jam_kerja = $i['id_jam_kerja'];
                                            $nama_lengkap = $i['nama_lengkap'];
                                            $jam_kerja_start = $i['jam_kerja_start'];
                                            $jam_kerja_end = $i['jam_kerja_end'];
                                            $hari = $i['hari'];
                                    ?>
                                    <tr>
                                        <td><?=$id?></td>
                                        <td><?=$jam_kerja_start?></td>
                                        <td><?=$jam_kerja_end?></td>
                                        <td><?=$hari?></td>
                                        <td>
                                            <center>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-bs-toggle="modal"
                                                            data-bs-target="#edit_jam_kerja<?=$id_jam_kerja?>"
                                                            class="btn btn-primary"><i class="fas fa-edit"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="table-responsive">
                                                    <div class="table table-striped table-hover ">
                                                        <a href="" data-bs-toggle="modal"
                                                            data-bs-target="#delete_jam_kerja<?=$id_jam_kerja?>"
                                                            class="btn btn-danger"> <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </center>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="delete_jam_kerja<?=$id_jam_kerja?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Jam Kerja
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?=base_url();?>Jam_kerja/hapus_jam_kerja_admin"
                                                        method="POST">
                                                        <input type="text" value="<?=$id_jam_kerja?>"
                                                            name="id_jam_kerja" hidden>
                                                        <input type="text" value="<?=$id_user?>" name="id_user" hidden>

                                                        <p>Apakah kamu ingin menghapus data jam kerja
                                                            ini?</i></b></p>

                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger">Submit</button>
                                                            <button type="button" class="btn btn-success"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="edit_jam_kerja<?=$id_jam_kerja?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Jam Kerja</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?=base_url();?>Jam_kerja/edit_jam_kerja_admin"
                                                        method="POST">
                                                        <input type="text" value="<?=$id_jam_kerja?>"
                                                            name="id_jam_kerja" hidden>
                                                        <input type="text" value="<?=$id_user?>" name="id_user" hidden>
                                                        <div class="mb-3">
                                                            <label for="jam_kerja_start" class="form-label">Jam Mulai
                                                                Kerja</label>
                                                            <input type="time" step="1" class="form-control"
                                                                id="jam_kerja_start" name="jam_kerja_start"
                                                                value="<?=$jam_kerja_start?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="jam_kerja_end" class="form-label">Jam Berakhir
                                                                Kerja</label>
                                                            <input type="time" step="1" class="form-control"
                                                                id="jam_kerja_end" name="jam_kerja_end"
                                                                value="<?=$jam_kerja_end?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="id_hari" class="form-label">Hari</label>
                                                            <select class="form-select"
                                                                aria-label="Default select example" name="id_hari">
                                                                <option value="1">Senin</option>
                                                                <option value="2">Selasa</option>
                                                                <option value="3">Rabu</option>
                                                                <option value="4">Kamis</option>
                                                                <option value="5">Jum'at</option>
                                                                <option value="6">Sabtu</option>
                                                                <option value="7">Minggu</option>
                                                            </select>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Jam Kerja</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url();?>Jam_kerja/tambah_jam_kerja" method="POST">
                                    <input type="text" value="<?=$id_user_pegawai?>" name="id_user" hidden>
                                    <div class="mb-3">
                                        <label for="jam_kerja_start" class="form-label">Jam Mulai Kerja</label>
                                        <input type="time" step="1" class="form-control" id="jam_kerja_start"
                                            name="jam_kerja_start" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jam_kerja_end" class="form-label">Jam Berakhir Kerja</label>
                                        <input type="time" step="1" class="form-control" id="jam_kerja_end"
                                            name="jam_kerja_end" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_hari" class="form-label">Hari</label>
                                        <select class="form-select" aria-label="Default select example" name="id_hari"
                                            required>
                                            <option value="1">Senin</option>
                                            <option value="2">Selasa</option>
                                            <option value="3">Rabu</option>
                                            <option value="4">Kamis</option>
                                            <option value="5">Jum'at</option>
                                            <option value="6">Sabtu</option>
                                            <option value="7">Minggu</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
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