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
            <h2>Laporan Rooster karyawan PT.Dizamatra Powerindo</h2>
            <p>Kepada yang terhormat Bpk/Ibu <b><?=$cuti[0]['nama_lengkap']?></b>, berikut jadwal rooster anda sudah
                dikirim, harap cek secara berkala dengan melakukan login ke aplikasi, Trimakasih.</p>
            <table style="border:1px solid black;" width="400" height="100">

                <thead style="border:1px solid black;">
                    <tr style="border:1px solid black;">
                        <th style="border:1px solid black;">Perihal</th>
                        <th style="border:1px solid black;">Mulai Rooster</th>
                        <th style="border:1px solid black;">Akhir Rooster</th>
                    </tr>
                </thead>
                <?php
                                            $id = 0;
                                            foreach($cuti as $i)
                                            :
                                            $id++;
                                            $nama_lengkap = $i['nama_lengkap'];
                                            $perihal = $i['perihal'];
                                            $mulai = $i['mulai'];
                                            $berakhir = $i['berakhir'];
                                    ?>
                <tr style="border:1px solid black;">
                    <td style="border:1px solid black;"><?=$perihal?></td>
                    <td style="border:1px solid black;"><?=$mulai?></td>
                    <td style="border:1px solid black;"><?=$berakhir?></td>
                </tr>
                <?php endforeach;?>
            </table>
        </center>

    </div>

</body>

</html>