<a href="<?=BASE_URL?>contatos/add_save">[ ADICIONAR ]</a>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $item) : ?>
    <tr>
        <td><?= $item['id']?></td>
        <td><?= $item['nome']?></td>
        <td><?= $item['email']?></td>
        <td>
            <a href="<?=BASE_URL?>contatos/edit/<?=$item['id']?>">[ EDITAR ]</a>
            <a href="<?=BASE_URL?>contatos/del/<?=$item['id']?>">[ EXCLUIR ]</a>
        </td>
    </tr>
    <?php endforeach;?>   
</table>