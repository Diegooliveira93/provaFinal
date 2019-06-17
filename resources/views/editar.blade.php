<h1>Formulário de Edição</h1>

<?php
        $produto = $produto[0];

?>

<form action="<?= url('/produtos/atualizar', ['id' => $produto->id])?>" method="post">

    <?= csrf_field(); ?>
    <?= method_field('PUT'); ?>

    <label for="titulo">Título do produto</label>
    <input type="text" name="titulo" id="titulo" value="<?= $produto->titulo ?>">
    <br>

    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="10"><?= $produto->descricao ?></textarea>
    <br>

    <label for="preco_parcela">Valor da Parcela</label>
    <input type="text" name="preco_parcela" id="preco_parcela" value="<?= $produto->preco_parcela?>" >
    <br>

    <label for="preco_total">Valor de total</label>
    <input type="text" name="preco_total" id="preco_total" value="<?= $produto->preco_total ?>" >
    <br>

    <button type="submit">Salvar</button>


</form>