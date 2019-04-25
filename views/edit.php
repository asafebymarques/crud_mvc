<h3>Editar</h3>

<form method="POST">
    ID:<br>
    <input type="number" name="id" id="id" value="<?=$info['id']?>" disabled>

    NOME:<br>
    <input type="text" name="nome" value="<?=$info['nome']?>"><br><br>
    EMAIL:<br>
    <?=$info['email']?><br><br>

    <input type="submit" value="Editar">
</form>