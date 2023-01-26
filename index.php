<html>

<head>
    <title>Praktikum 11</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h2>TAMBAH DATA</h2>
    <div class="isi-form">
        <center>
            <form action="proses.php" method="POST">
                <label for="name">Nama :</label>
                <input type="text" name="name" size="30" maxlength="30" style="width: 95%" /><br>
                <label for="email">Email :</label>
                <input type="text" name="email" size="50" maxlength="40" style="width: 95%" /><br>
                <label for="address">Alamat :</label>
                <input type="text" name="address" size="50" maxlength="50" style="width: 95%" /><br>
                <label for="gender">Jenis Kelamin:</label>
                <select name="gender" style="width: 95%">
                    <option value="">- Pilih Gender -
                    <option value="male">Male
                    <option value="female">Female
                </select><br>
                <label for="position">Posisi :</label>
                <input type="text" name="position" size="50" maxlength="30" style="width: 95%" /><br>
                <label for="status">Status :</label>
                <select name="status" style="width: 95%">
                    <option value="">- Pilih Status -
                    <option value="fulltime">Fulltime
                    <option value="parttime">Parttime
                </select><br><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </center>
    </div>
    <a href="tampil.php"><button>Tampilan Inputan Data Mahasiswa</button></a>


    <h3>Nama: Hafizh Fuqaha <br>NIM: 105219028 </h3>
</body>

</html>