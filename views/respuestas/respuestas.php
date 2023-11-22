<form action="<?= base_url ?>respuestas/guardar" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>

    <label for="resCorrectas">Número de respuestas correctas:</label>
    <input type="text" name="resCorrectas" required>

    <label for="resIncorrectas">Número de respuestas incorrectas:</label>
    <input type="text" name="resIncorrectas" required>

    <label for="resBlanco">Numero de respuestas en blanco</label>
    <input type="text" name="resBlanco" required>

    <button type="submit">Resultado</button>

    <label for=""></label>
</form>