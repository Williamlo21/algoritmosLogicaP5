<form action="<?= base_url ?>estudiantes/guardar" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>

    <label for="parcial1">Nota de parcial 1:</label>
    <input type="text" name="parcial1" required>

    <label for="parcial2">Nota de parcial 2:</label>
    <input type="text" name="parcial2" required>

    <label for="parcial3">Nota de parcial 3:</label>
    <input type="text" name="parcial3" required>

    <button type="submit">Promedio</button>

    <label for=""></label>
</form>