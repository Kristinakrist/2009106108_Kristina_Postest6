<?php 
    require 'config.php';
   
?>


<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>Daftar Wisata</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
</head>
<body>
    <header class="header">
     
    </header>
    <div class="main">
        <div class="navbar">
            <label class="logo">Travell</label>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
               
            </ul>
            <a href="#Telusuri" class="btn">Telusuri</a>
        </div>
        <div class="content">
            <h1>Wisata Kalimantan Timur</h1>
            <p>Kalimantan adalah pulau yang penuh dengan kekayaan,
                tetapi masih belum banyak yang tahu mengenai potensinya. 
                Salah satu contohnya dari segi pariwisata, sehingga belum 
                terlalu banyak dikunjungi oleh turis baik domestik maupun mancanegara.</p>
            
            <div>
                <button type="button">Search</button>
            </div>
        </div>
    </div>
    
    <section class="Galery">
        <div class="container">
            <div class="box-Galery">
                <div class="box">
                    <img src="./Bukit-bingkirai.jpg" alt="" />
                    <h1>Bukit Bangkirai</h1>
                    <p>Wisata yang ada di Kutai Kartanegara ini adalah hutan hujan tropis alami dengan luas sekitar 1500 hektar. 
                       Telah berdiri kokoh selama kurang lebih 22 tahun dan masih dikunjungi banyak pelancong karena daya tariknya yang tidak pernah mengecewakan.</p>
                    <p><i><b>Rp.100.000 (Sekali Masuk)<b></i></p>

                </div>
                <div class="box">
                    <img src="./Batu-Dinding.jpg" width="5px" height="260px" alt="" />
                    <h1>Batu Dinding</h1>
                    <p>Batu dinding ini menjulang tinggi memagari Sungai Mahakam Ulu sepanjang 800 meter dengan tinggi antara 100 hingga 200 meter. 
                       Gugusan batu dinding ini semakin menarik karena warna putihnya dan spot terbaik untuk memotret.</p>
                       <p><i><b>Rp.50.000 (Sekali Masuk)<b></i></p>
                       
                </div>
                <div class="box">
                    <img src="./beras-basah.jpg" width="15px" height="260px" alt="" />
                    <h1>Beras Basah</h1>
                    <p>Pulau Beras Basah ini merupakan lokasi wisata yang wajib dikunjungi ketika sedang berada di kota Bontang. 
                       Tak lengkap rasanya berkunjung di kota Bontang ini tanpa menyempatkan diri mengunjungi tempat wisata ini.
                       Pulau yang cantik ini merupakan surganya Kota Bontang dan juga sangat populer di kalangan wisatawan, 
                       baik wisatawan domestik maupun mancanegara yang pernah berkunjung ke kota Taman. </p>
                       <p><i><b>Rp.100.000 (Sekali Masuk)<b></i></p>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        function ubahMode() {
            const ubah = document.body;
            ubah.classList.toggle('dark');
        }
    </script>
    <script src="script.js"></script>




</body>
</html>