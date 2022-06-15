<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <title>Anil Labs - Codeigniter mail templates</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>

    <div>

        <div style="font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center"
            align="center" id="emb-email-header"><img
                style="border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px"
                src="https://cdns.klimg.com/dream.co.id/resized/640x320/news/2019/05/17/108124/tips-dapatkan-foto-keren-saat-traveling-1905170.jpg"
                alt="" width="152" height="108"></div>
        <center>
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