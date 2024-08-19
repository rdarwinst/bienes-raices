<?php

    declare(strict_types = 1);
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.avif" type="image/avif">
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" width="200" height="300" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>25 años de Experiecia</blockquote>
                <p>Donut cake oat cake cheesecake tootsie roll chocolate macaroon jelly danish. Jelly-o danish jujubes sugar plum candy. Fruitcake jelly bear claw jelly marshmallow gummi bears I love. Apple pie apple pie muffin icing chocolate bar I love jelly-o cake. Caramels I love candy canes candy apple pie. Carrot cake biscuit gummi bears muffin gingerbread gummi bears jelly.</p>
                <p>Chupa chups sesame snaps I love powder tiramisu I love. Jelly soufflé gingerbread sugar plum muffin soufflé chocolate cheesecake. Macaroon soufflé jelly beans carrot cake halvah tootsie roll. Marshmallow brownie bonbon jelly dessert. Macaroon pie icing bonbon biscuit sweet roll candy pie cake. Candy dragée icing carrot cake I love gummies. Fruitcake cake cake powder marzipan wafer. Sugar plum I love pudding I love I love soufflé I love I love croissant. Icing biscuit bear claw wafer dessert ice cream chocolate cake.</p>
            </div>
        </div>
    </main>

    <section class="contenedor">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">

            <div class="icono">
                <img loading="lazy" width="200" height="300" src="build/img/icono1.svg" alt="Icono Seguridad">
                <h3>Seguridad</h3>
                <p>Powder shortbread donut shortbread sugar plum carrot cake lemon drops pastry. Gummi bears pie
                    liquorice bonbon marshmallow. Dragée chupa chups bear claw candy canes soufflé gingerbread dragée I
                    love I love.</p>
            </div><!-- .icono -->
            <div class="icono">
                <img loading="lazy" width="200" height="300" src="build/img/icono2.svg" alt="Icono Precio">
                <h3>Precio</h3>
                <p>Powder shortbread donut shortbread sugar plum carrot cake lemon drops pastry. Gummi bears pie
                    liquorice bonbon marshmallow. Dragée chupa chups bear claw candy canes soufflé gingerbread dragée I
                    love I love.</p>
            </div><!-- .icono -->
            <div class="icono">
                <img loading="lazy" width="200" height="300" src="build/img/icono3.svg" alt="Icono Tiempo">
                <h3>Tiempo</h3>
                <p>Powder shortbread donut shortbread sugar plum carrot cake lemon drops pastry. Gummi bears pie
                    liquorice bonbon marshmallow. Dragée chupa chups bear claw candy canes soufflé gingerbread dragée I
                    love I love.</p>
            </div><!-- .icono -->

        </div>
    </section>

<?php
    incluirTemplate('footer');
?>