<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/styleFooter.css">
    <link rel="stylesheet" href="style/styleNav.css">
    <link rel="stylesheet" href="style/styleBeranda.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/logo_amerta.png" type="image/amerta-icon" width="100%">
    <title>Beranda - Angkatan 62</title>

</head>

<body>
    <header>
        <div class="container">
            <a href="#" class="logo">
                <div class="img">
                    <img src="img/logo_amerta.png" alt="">
                </div>
                <p>Amerta</p>
            </a>
            <!-- Menu Navigasi -->
            <nav style="margin-right: 8%;">
                <ul class="navbar">
                    <li onclick="location.href = '/';"><a href="/">Home</a></li>
                    <li onclick="location.href = '/konsultasi';"><a href="/konsultasi">Konsultasi</a></li>
                    <li onclick="location.href = '/sambat';"><a href="/sambat">Sambat</a></li>
                    <li onclick="location.href = '/informasi';"><a href="/informasi">Informasi</a></li>
                    <li onclick="location.href = 'kabar-dan-info-62';"><a href="kabar-dan-info-62">News</a></li>
                    <li onclick="location.href = 'kaca-62';"><a href="kaca-62">Gallery</a></li>
                    <li onclick="location.href = 'kreasi-62';"><a href="kreasi-62">About</a></li>
                </ul>
                <div class="icons" id="menu-btn">
                    <i class="fa fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <section>

        <!-- Class Welcome = tulisan welcome di beranda -->
        <div class="welcome">
            <img class="maskot" src="img/antasena.png" alt="welcome">
            <img class="bg-maskot" src="img/bg maskot.png" alt="">
            <div class="konten">
                <h1>Welcome Amertarians</h1>
                <p>Ternama Amerta, terupa Antasena, serta terjaga Tridarma sebagai kembara asa. Inilah kami, Enam Dua, sedia tuk genggam sukses bersama karena tanpa kamu, kami kurang satu. Satu Asa Untuk Amerta Jaya!</p>
                <a href="kreasi-62" class="more" title="Kreasi 62">more ></a>
            </div>

        </div>

        <!-- Class SayHello = kontainer kabar62 -->
        <div class="sayHello">
            <h1>Say Hello to Kabar 62</h1>
            <div class="konten-sayHello">
                <div class="kotak-konten">
                    <div class="news style-card-umum">
                        <div class="gambar">
                            <img src="img/sayhello_news.png" alt="News">
                        </div>
                        <div class="deskripsi">
                            <h2>News</h2>
                            <p>Kabar terkini seputar angkatan 62</p>
                        </div>
                    </div>
                </div>

                <div class="kotak-konten">
                    <div class="event style-card-umum">
                        <div class="gambar">
                            <img src="img/sayhello_event.png" alt="Event">
                        </div>
                        <div class="deskripsi">

                            <h2>Event</h2>
                            <p>Seluruh event yang diselenggarakan oleh angkatan 62</p>
                        </div>
                    </div>
                </div>

                <div class="kotak-konten">
                    <div class="information style-card-umum">
                        <div class="gambar">
                            <img src="img/sayhello_information.png" alt="Information">
                        </div>
                        <div class="deskripsi">
                            <h2>Information</h2>
                            <p>Informasi umum lainnya</p>
                        </div>
                    </div>
                </div>
            </div>


            <a href="kabar-dan-info-62" class="more" title="Kabar 62">more ></a>
        </div>

        <!-- Class kaca62 = Kaca62 -->
        <div class="kaca62">
            <div class="gambar"><img src="img/kaca62.png" alt="Kaca 62"></div>
            <div class="konten">
                <h1>Kaca 62</h1>
                <p>Kenangan dan cerita dari seluruh agenda yang diselenggarakan oleh Angkatan 62</p>
                <div class="kotakMore">
                    <a href="kaca-62" class="more" title="Kaca 62">more ></a>
                </div>
            </div>
        </div>

        <!-- Class transisi62 = Transisi 62 -->
        <div class="transisi62">
            <div class="konten">
                <h1>Transisi 62</h1>
                <p>Segala bentuk notulensi dan transparansi dari anggaran Angkatan 62</p>
                <div class="kotakMore">
                    <a href="https://docs.google.com/spreadsheets/d/1hb62fnFWsrwa_HjtuCVTkTP1ZgFJO0eLFnyGN1U1V7s/edit#gid=0" class="more" title="Transisi 62" target="_blank">more ></a>
                </div>
            </div>
            <div class="gambar"><img src="img/transisi62.png" alt="Kaca 62"></div>
        </div>
    </section>

    <!-- fooooterrrrrrrrrrrrrrrrrrrrr -->
    <footer>
        <div class="left">
            <h3>About Us</h3>
            <div class="about-desc">
                <p>Ternama Amerta, terupa Antasena, serta terjaga Tridarma kembara asa. Satu asa Amerta Jaya!</p>
            </div>
        </div>
        <div class="middle"></div>
        <div class="right">
            <h3>Follow Us</h3>
            <div class="follow-icon">
                <ul>
                    <li><a href="https://open.spotify.com/show/0ZKfgzUsCP7Qy2lFNInj1P" target="_blank" id="Spotify" title="Podcastnya Amerta 62"><i class="fa fa-spotify fa-2x"></i></a></li>
                    <li><a href="https://www.instagram.com/stis_62/?hl=en" target="_blank" id="Instagram" title="@stis_62"><i class="fa fa-instagram fa-2x"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCin0e1lFSnVZxSxli2oreiQ" target="_blank" id="YouTube" title="Amerta STIS 62"><i class="fa fa-youtube-play fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="bottom">
            <p>copyright &copy; Tim IT Amerta 62</p>
        </div>
    </footer>

    <script src="script/script-nav.js"></script>
</body>

</html>