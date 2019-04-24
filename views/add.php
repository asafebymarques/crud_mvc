<h3>Adicionar</h3>

<?php if($error == 'exits'):?>
    <div class="aviso">E-mail já existe, tente outro!</div>
<?php endif;?>

<form action="<?=BASE_URL?>contatos/add_save" method="post">
    NOME:<br>
    <input type="text" name="nome" id="email" required><br><br>
    EMAIL:<br>
    <input type="email" name="email" id="email" required><br><br>
    <input type="submit" value="Adicionar">
</form>