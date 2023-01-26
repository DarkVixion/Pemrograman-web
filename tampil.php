<?php
$koneksi = mysqli_connect("localhost", "root", "", "prak11");
$statistik = query("SELECT * FROM datas");

function query($data)
{
    global $koneksi;

    $hasil = mysqli_query($koneksi, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 11</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h2 class="judul">Hasil Inputan Data </h2>
    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($statistik as $data) : ?>
        <tr>
            <div class="tampil">
                <th style="width: 50px;"><?php echo $no; ?></th>
                <td style="width: 100px;"><?php echo $data["name"]; ?></td>
                <td style="width: 150px;"><?php echo $data["email"]; ?></td>
                <td style="width: 150px;"><?php echo $data["address"]; ?></td>
                <td style="width: 150px;"><?php echo $data["gender"]; ?></td>
                <td style="width: 150px;"><?php echo $data["position"]; ?></td>
                <td style="width: 150px;"><?php echo $data["status"]; ?></td>
            </div>
        </tr>

        <?php $no++; ?>
        <?php endforeach; ?>
    </table>

    <h1 class="data">Banyaknya DATA = <?php echo ($no - 1); ?> Inputan</h1>
    <a href="index.php"><button>Input Data (Update)</button> </a>

</html>