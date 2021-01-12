<html lang="en"><head>
    <style type="text/css">
        *{
            font-size: 12pt;
        }
        body{
            /*margin: 2cm 1cm 1cm 2cm;*/
            padding: 0 1cm;
            /*border: 1px black solid;
            width: auto;
            height: auto;*/
        }
        img{
            background-size: cover;
            width: 100%;
            border-bottom: double 3pt black;
        }
        h1{
            text-align: center;
            font-size: 14pt;
        }
        .label{
            width: 5cm;
        }
        .titik-dua td{
            width: 14pt;
        }
        td{
            height: 14pt;
        }
        .salin{
            height: 40pt;
            border: 1px black solid;
        }
        .footer{
            box-sizing: border-box;

        }
        .pasfoto{
            text-align: center;
            width: 3cm;
            height: 4cm;
            margin: 1cm 0cm 0cm 2cm;
            border: 1px black solid;
            line-height: 4cm;
            display: inline-block;
        }
        .sign{
            text-align: center;
            padding-top: 3cm;
            width: 3cm;
            height: 4cm;
            margin: 1cm 3cm 0cm 0cm;
            float: right;
        }
    </style>
</head><body>
    <?php foreach ($data as $i => $row) {?>
    <div class="box">
        <img src="<?php echo base_url(); ?>assets/img/kop.png">
        <h1>
            FORMULIR PENDAFTARAN STAF BPH HMIF 2020 <br>UNIVERSITAS SRIWIJAYA <br>
        </h1>
        <br>
        <table>
            <tr>
                <td class="label">Nama Lengkap</td>
                <td class="titik_dua">:</td>
                <td><?php echo $row['nama_lengkap']; ?></td>
            </tr>
            <tr>
                <td class="label">NIM</td>
                <td class="titik_dua">:</td>
                <td><?php echo $row['nim']; ?></td>
            </tr>
            <tr>
                <td class="label">Angkatan</td>
                <td class="titik_dua">:</td>
                <td><?php echo $row['angkatan']; ?></td>
            </tr>
            <tr>
                <td class="label">Kelas</td>
                <td class="titik_dua">:</td>
                <td><?php echo $row['kelas']; ?></td>
            </tr>
            <tr>
                <td class="label">Domisili</td>
                <td class="titik_dua">:</td>
                <td><?php echo $row['domisili']; ?></td>
            </tr>
            <tr>
                <td class="label">Alamat Lengkap</td>
                <td class="titik_dua">:</td>
                <td><?php echo $row['alamat']; ?></td>
            </tr>
            <tr>
                <td class="label">Lokasi Tes</td>
                <td class="titik_dua">:</td>
                <td><?php echo $row['lokasi_tes']; ?></td>
            </tr>
            <tr>
                <td class="label">Dinas Pilihan</td>
                <td class="titik_dua">:</td>
                <td ><?php echo $row['dinas']; ?></td>
            </tr>
        </table>
        <br><br><br>
        <p>Salin kalimat di bawah ini:</p>
        <p><b>Saya bersedia ditempatkan di dinas manapun apabila diterima sebagai staf BPH HMIF 2020 Universitas Sriwijaya</b></p>
        <div class="salin"></div>
        <div class="footer">
            <div class="pasfoto">
                <p>Pasfoto 3x4</p>
            </div>
        </div>      
    </div>
    <?php }?>
</body></html>