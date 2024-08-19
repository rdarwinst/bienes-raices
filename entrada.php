<?php

    declare(strict_types = 1);
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoracion de tu hogar</h1>
        <picture class="imagen-anuncio">
            <source srcset="build/img/destacada.avif" type="image/avif">
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" width="200" height="auto" src="build/img/destacada.jpg" alt="Imagen de la Propiedad">
        </picture>
        <p class="informacion-meta">Escrito el: <span>30/12/2005</span> por: <span>Admin</span></p>
        <div class="resumen-propiedad">
            
            <p>Every day is taco ipsum tuesday. It’s taco time all the time. Tacos, tacos, tacos. Can you put some peppers and onions on that? Does guac cost extra? CARNITAS!! BARBACOA!! Tacos al pastor made with adobada meat. Say taco one more time. Side of rice and beans, please. Um, Tabasco? No thanks, do you have any Cholula? BARBACOA!! 50 cent tacos! I’ll take 30. Say taco one more time. These tacos are lit 🔥. BARBACOA!! 50 cent tacos! I’ll take 30. I’ve been following that taco truck around all day. Tacos, tacos, tacos.</p>
            <p>Tacos Al pastor/De Adobada are made of thin pork steaks seasoned with adobo seasoning, then skewered and overlapped on one another on a vertical rotisserie cooked and flame-broiled as it spins. Burritos are very tasty. Yeah, apparently the taco shack was robbed. They left the money but took the tacos.</p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>