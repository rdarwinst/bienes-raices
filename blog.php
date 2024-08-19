<?php

    declare(strict_types = 1);
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
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
                        I'm baby big mood narwhal PBR&B la croix cornhole, lomo austin enamel pin humblebrag copper mug
                        kinfolk small batch.
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
                        Fingerstache bitters af bushwick truffaut. Knausgaard occupy neutra leggings mixtape adaptogen
                        venmo mumblecore.
                    </p>
                </a>
            </div><!-- .texto-entrada -->
        </article><!-- .entrada-blog -->
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.avif" type="image/avif">
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" width="200" height="300" src="build/img/blog3.jpg" alt="Imagen de la entrada">
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
                    <source srcset="build/img/blog4.avif" type="image/avif">
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" width="200" height="300" src="build/img/blog4.jpg" alt="Imagen de la entrada">
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
    </main>

<?php
    incluirTemplate('footer');
?>