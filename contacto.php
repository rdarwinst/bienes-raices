<?php

    declare(strict_types = 1);
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor">
        <div class="imagen-formulario"></div>
        <h2>Llena el formulario de contacto</h2>
        <form action="#" class="formulario">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre.">

                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Ingresa tu dirección de email.">

                <label for="telefono">Teléfono</label>
                <input type="tel" name="telefono" id="telefono" placeholder="Ingresa un teléfono de contacto.">

                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje" cols="20" rows="10"></textarea>

            </fieldset>

            <fieldset>
                <legend>Información Sobre la Propiedad</legend>

                <label for="opciones">Vende o Compra</label>
                <select name="opciones" id="opciones">
                    <option value="" disabled selected>-- Selecciona --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" name="presupuesto" id="presupuesto" placeholder="Ingresa un valor." min="0">

            </fieldset>

            <fieldset>
                <legend>Información de Contacto</legend>
                <p>¿Cómo deseas ser contactado(a)?</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input type="radio" name="forma-contacto" id="contactar-telefono">
                    <label for="contactar-email">Correo Electrónico</label>
                    <input type="radio" name="forma-contacto" id="contactar-email">
                </div>

                <p>Si elegiste teléfono, elige la fecha y hora para ser contactado(a).</p>

                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" name="hora" id="hora" min="09:00" max="18:00">

            </fieldset>
            <input class="boton-verde-block w-sm-100" type="submit" value="Enviar Contacto">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>