<form action="<?= base_url ?>partidos/guardar" method="post">
    <label for="equipo">Equipo</label>
    <input type="text" name="equipo" required>

    <label for="ganados">Número de partidos ganados:</label>
    <input type="text" name="ganados" required>

    <label for="empatados">Número de partidos empatados:</label>
    <input type="text" name="empatados" required>

    <label for="perdidos">Numero de partidos perdidos</label>
    <input type="text" name="perdidos" required>

    <button type="submit">Resultado</button>

    <label for=""></label>
</form>