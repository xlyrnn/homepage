<!DOCTYPE html>
<html lang="en">
<head>

    <?php require_once 'connect.php'; ?>
    <?php require_once 'blog.php'; ?>

    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Saya</title>
</head>
<body>
   <header>
        <section class="navbar">
            <img src="assets/img/piwirevlogo-removebg-preview.png" alt="piwlogo">
            <nav class="nav-list">
                <ul>
                    <li><a href="javascript:;" onclick="darkMode();"><i class="fa-regular fa-moon"></i></a></li>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </section>

   <section id="home" class="home-container">
        <div class="title-img">
                <img src="assets/img/Group 31.png" alt="homepiwi" width="350">
        </div>
        <div class="greet">
            <div class="greet-head">
                <h1>HALLO, INI PIWI!</h1>
            </div>
            <div class="greet-p">
                <p> Perkenalkan, saya <?php
                $row = mysqli_fetch_assoc($result); echo $row['nama']; ?>. Saya tinggal di daerah <?php echo $row['alamat']; ?>. Saat ini saya berada di tahun kedua kuliah pada prodi <?php echo $row['prodi']; ?> di Universitas <?php echo $row['universitas']; ?>. 
                Hobi saya <?php echo $row['hobi']; ?>.</p>
            </div>
        </div>
    </section>
</header>

    <main>
        <section id="gallery">
            <div class="gallerytext">   
                <h1><u>GALLERY</u></h1>
            </div>           
             <!-- Isi kumpulan foto-foto disini -->
            <div class="img-container"> 
                <div>
                    <img src="assets/img/Group 17.png" alt="piw" width="350">
                </div>
                <div>
                    <img src="assets/img/Group 18.png" alt="piw2" width="350">
                </div>
                <div>
                     <img src="assets/img/Group 19.png" alt="piw3" width="350">
                </div>
            </div>
        </section>

        <section id="blog">
            <div class="blogtext">
                <h1><u>Blog</u></h1>
            </div>
            <div class="article-container">
            <article>
                <div>
                    <h1><?php echo $j1; ?></h1>
                </div>
                 <div>
                    <p><?php echo $k1; ?></p>
                    <a href="<?php echo $l1; ?>">Baca Selengkapnya</a>
                 </div>
                </article>
            <article>
                <div>
                    <h1><?php echo $j2; ?></h1>
                </div>
                <div>
                    <p><?php echo $k2; ?></p>
                    <a href="<?php echo $l1; ?>">Baca Selengkapnya</a>
                </div>
                </article>
                <article>
                    <div>
                        <h1><?php echo $j3; ?></h1>
                    </div>
                    <div>
                        <p><?php echo $k3; ?></p>
                        <a href="<?php echo $l3; ?>">Baca Selengkapnya</a>
                    </div>
                </article>
            </div>
        </section>

        <section id="contact">
            <h1><u>Contact</u></h1>

            <div class="contact-container">
                <div class="contact-child"> 
                    <i class="fa-brands fa-discord"></i>
                    <h3>itspiwi</h3>    
                </div>

                <div class="contact-child">
                    <i class="fa-brands fa-instagram"></i>
                    <h3>@happypricill</h3>
                </div>

                <div class="contact-child">
                    <i class="fa-solid fa-envelope"></i>
                    <h3>happypricillia@gmail.com</h3>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <!-- Footer -->
    </footer>
    <script src="assets/js/script.js"></script>
</body>
</html>