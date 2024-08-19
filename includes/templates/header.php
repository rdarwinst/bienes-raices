<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="build/css/app.css" as="style">
    <link rel="stylesheet" href="build/css/app.css">
    <title>Bienes Raices</title>
</head>

<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="build/img/logo.svg" alt="Logotipo del sitio">
                </a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="Icono Menú Responsive">
                </div>

                <div class="derecha">
                    <img src="build/img/dark-mode.svg" alt="Icono Dark Mode" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div><!-- .barra -->
            <?php if($inicio){ ?>
                <h1>Venta de casas y departamentos exclusivos de lujo</h1>
            <?php } ?>
        </div>
    </header>