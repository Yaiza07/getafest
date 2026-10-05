<?php
include "header.html";
?>

<html lang="es">
    <body>
        <div class="card">
            <h2>Reserva tu Pase</h2>
            <form method="post" action="procesar.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nombre">Nombre completo: </label>
                    <input type="text" name="nombre" required placeholder="Ej. Yaiza">
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico: </label>
                    <input type="email" name="email" required placeholder="tu@email.com">
                </div>
                <div class="form-group">
                    <label for="edad">Edad: </label>
                    <input type="number" name="edad" required>
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo de pase: </label>
                    <label> <input type="radio" name="tipo" value="General"> General (50€)</label>
                    <label> <input type="radio" name="tipo" value="VIP"> VIP (120€)</label>
                    <label> <input type="radio" name="tipo" value="SuperVIP"> Super VIP + Camping (180€)</label>
                </div>
                <div class="form-group">
                    <label for="dias">Días de Asistencia (+10€ por día): </label>
                    <label> <input type="checkbox" name="dias[]" value="Viernes">Viernes</label>
                    <label> <input type="checkbox" name="dias[]" value="Sabado">Sábado</label>
                    <label> <input type="checkbox" name="dias[]" value="Domingo">Domingo</label>
                </div>
                <div class="form-group">
                    <label for="metodo">Método de pago: </label>
                    <select name="metodo" id="metodo">
                        <option value="Tarjeta de credito">Tarjeta de crédito</option>
                        <option value="Bizum">Bizum</option>
                        <option value="PayPal">PayPal</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="foto">Foto para la Acreditación(JPG / PNG): </label>
                    <input type="file" id="foto" name="foto">
                </div>
                <div class="form-group">
                    <label for="comentario">Comentarios o peticiones especiales: </label>
                    <textarea name="comentario" placeholder="Alergias, movilidad reducida, etc."></textarea>
                </div>
                <input type="submit" class="btn" name="enviar" value="Generar Acreditación">
            </form>
        </div>
    </body>
</html>
