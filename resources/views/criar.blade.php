<h1>Formulário de Cadastro</h1>

<form action="<?= url('/produtos/cadastrar')?>" method="post">

    <?= csrf_field(); ?>

    <label for="titulo">Título do produto</label>
    <input type="text" name="titulo" id="titulo">
    <br>

    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
    <br>

    <label for="preco_parcela">Valor do parcela</label>
    <input type="text" name="preco_parcela" id="preco_parcela">
    <br>

    <label for="preco_total">Valor de total do produto</label>
    <input type="text" name="preco_total" id="preco_total">
    <br>

    <button type="submit">Cadastrar produto</button>


</form>