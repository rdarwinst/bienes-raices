<?php

    declare(strict_types = 1);
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>
<main class="contenedor">
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
    </main>

    <section class="seccion contenedor">
        <h3>Casas y Depas En Venta</h3>

        <div class="contenedor-anuncios">

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.avif" type="image/avif">
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="build/img/anuncio1.jpg" alt="Imagen Anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
                    <p class="precio">$450.000.000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <a class="boton-amarillo-block" href="anuncio.html">Ver Propiedad</a>
                </div><!-- .contenido-anuncio -->
            </div><!-- .anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.avif" type="image/avif">
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="build/img/anuncio2.jpg" alt="Imagen Anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con Terminados de Lujo</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
                    <p class="precio">$450.000.000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <a class="boton-amarillo-block" href="anuncio.html">Ver Propiedad</a>
                </div><!-- .contenido-anuncio -->
            </div><!-- .anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.avif" type="image/avif">
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="build/img/anuncio3.jpg" alt="Imagen Anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con Piscina</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
                    <p class="precio">$450.000.000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <a class="boton-amarillo-block" href="anuncio.html">Ver Propiedad</a>
                </div><!-- .contenido-anuncio -->
            </div><!-- .anuncio -->

        </div><!-- .contenedor-anuncios -->
        <div class="alinear-derecha">
            <a class="boton boton-verde" href="anuncios.html">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor pronto se pondrá en contacto contigo.</p>
        <a href="contacto.html" class="boton-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.avif" type="image/avif">
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" width="200" height="300" src="build/img/blog1.jpg" alt="Imagen de la entrada">
                    </picture>
                </div><!-- .iamgen -->
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/06/2024</span> por: <span>Admin</span></p>

                        <p>
                            I'm baby big mood narwhal PBR&B la croix cornhole, lomo austin enamel pin humblebrag copper mug kinfolk small batch.
                        </p>
                    </a>
                </div><!-- .texto-entrada -->
            </article><!-- .entrada-blog -->
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.avif" type="image/avif">
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" width="200" height="300" src="build/img/blog2.jpg" alt="Imagen de la entrada">
                    </picture>
                </div><!-- .iamgen -->
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/06/2024</span> por: <span>Admin</span></p>

                        <p>
                            Fingerstache bitters af bushwick truffaut. Knausgaard occupy neutra leggings mixtape adaptogen venmo mumblecore. 
                        </p>
                    </a>
                </div><!-- .texto-entrada -->
            </article><!-- .entrada-blog -->
                
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    Same gatekeep green juice, tonx prism etsy tumeric post-ironic godard banjo yuccie pickled normcore whatever woke. Hella slow-carb retro yes plz pickled aesthetic. Grailed bitters freegan, sartorial post-ironic offal kinfolk fingerstache.
                </blockquote>
                <p>- Dayana Cacéres</p>
            </div>
        </section>
    </div>

<?php
    incluirTemplate('footer');
?>