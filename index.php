<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=no">
    <title>Document</title>
    <link rel="stylesheet" href="style.scss" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="akses1">
        <img src="ASSET/Group 8.png" alt="">
    </div>
    <div class="akses2">
        <img src="ASSET/Group 9.png" alt="">
    </div>
    <div class="akses3">
        <img src="ASSET/casual-life-3d-boy-and-girl-sitting-in-front-of-laptop 1.png" alt="">
    </div>

    <div class="atas">
        <div class="kartu">
            <div class="kiri">
                <img src="ASSET/casual-life-3d-boy-and-girl-sitting-in-front-of-laptop 1.png" alt="">

                <p>LET'S
                </p>
                <p class="grow">
                    GROW
                </p>
                <p> TOGETHER</p>
                <p class="forum">Forum studi informatika</p>


            </div>
            <div class="kanan">
                <div class="atas">
                    <h3>
                        Absensi Workshop
                    </h3>
                    <p>FORSTIF</p>
                </div>

                <div class="absensi">
                    <form action="proccessAddingData.php" method="post"
                        onSubmit="return confirm('Apakah data sudah benar?')">
                        <div class="input-grup">
                            <label for="Nama"> Nama Kamu</label><br>
                            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Kamu"><br>
                        </div>
                        <div class="input-grup">
                            <label for="Nama"> BP</label><br>
                            <input type="text" id="nobp" name="nobp" placeholder="BP berapa kamu..."><br>
                        </div>
                        <div class="input-grup">
                            <label for="Nama"> Jurusan Kamu</label><br>
                            <input type="text" id="jurusan" name="jurusan" placeholder="Jurusan kamu apa..."><br>
                        </div>
                        <div class="bag-tombol">

                            <button id="masuk" name="add" type="submit" class="tombol mt-5 mb-4">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<script type="text/javascript">
// function validasi() {
//     var nama = document.getElementById("nama").value;
//     var nobp = document.getElementById("nobp").value;
//     var jurusan = document.getElementById("jurusan").value;
//     if (nama != "" && nobp != "" && jurusan != "") {
//         return true;
//     } else {
//         alert('Anda harus mengisi data dengan lengkap !');
//         return false;
//     }
// }
</script>