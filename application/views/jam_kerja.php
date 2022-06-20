<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <title>Laporan Jam kerja karyawan PT.Dizamatra Powerindo</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>

    <div>


        <center>
            <h2>Laporan Jam kerja karyawan PT.Dizamatra Powerindo</h2>
            <p>Kepada yang terhormat Bpk/Ibu <b><?=$jam_kerja[0]['nama_lengkap']?></b>, berikut jadwal Jam Kerja anda sudah dikirim, harap cek secara berkala dengan melakukan login ke aplikasi, Trimakasih.</p>
            <table style="border:1px solid black;">

                <thead style="border:1px solid black;">
                    <tr style="border:1px solid black;">
                        <th style="border:1px solid black;">No</th>
                        <th style="border:1px solid black;">Jam Mulai Bekerja</th>
                        <th style="border:1px solid black;">Jam Akhir Bekerja</th>
                        <th style="border:1px solid black;">Hari</th>
                    </tr>
                </thead>
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
                <tr style="border:1px solid black;">
                    <td style="border:1px solid black;"><?=$id?></td>
                    <td style="border:1px solid black;"><?=$jam_kerja_start?></td>
                    <td style="border:1px solid black;"><?=$jam_kerja_end?></td>
                    <td style="border:1px solid black;"><?=$hari?></td>
                </tr>
                <?php endforeach;?>
            </table>
        </center>

    </div>

</body>

</html>