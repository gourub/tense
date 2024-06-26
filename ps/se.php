<!DOCTYPE HTML>
<html>
<head>
    <title>Hielo by TEMPLATED</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="ma.css">
</head>
<body>

<!-- Header -->
<header id="header" class="skel-layers-fixed">
    <div class="logo"><a href="index.html">Hola <span>por VicTempest</span></a></div>
    <a href="#menu">Menu</a>
</header><!-- Nav -->

<nav id="menu">
    <ul class="links">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="generic.html">Generico</a></li>
        <li><a href="elements.html">Elementos</a></li>
    </ul>
</nav><!-- Banner -->

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">
            <?php
            $categorias = array(
                "Manga",
                "Poder",
                "Dragones",
                "Fantasia",
                "Infectados"
            );

            foreach ($categorias as $categoria) {
                echo '<div>
                        <div class="box">
                            <div class="image fit">
                                <img src="images/' . strtolower($categoria) . '.jpg" alt="" width="600" height="300">
                            </div>
                            <div class="content">
                                <header class="align-center">
                                    <p>.</p>
                                    <h2>' . $categoria . '</h2>
                                </header>
                                <p>Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                                <footer class="align-center">
                                    <a href="#" class="button alt">Ver mas</a>
                                </footer>
                            </div>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p>Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
            <h2>Morbi maximus justo</h2>
        </header>
    </div>
</section>

<!-- Three -->
<section id="three" class="wrapper style2">
    <div class="inner">
        <header class="align-center">
            <p class="special">Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
            <h2>Morbi maximus justo</h2>
        </header>
        <div class="gallery">
            <div>
                <div class="image fit">
                    <a href="#"><img src="images/pic01.jpg" alt="" width="600" height="300"></a>
                </div>
            </div>
            <div>
                <div class="image fit">
                    <a href="#"><img src="images/pic02.jpg" alt="" width="600" height="300"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/main.js"></script>
</body>
</html>
