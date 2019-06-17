<h1>Listagem de Produtos</h1>

<p><a href="<?= url('/produtos/novo');?>">Cadastrar Novo Produto</a></p>

<?php
    if(!empty($produtos)){

        echo "<table>";

        echo  "<tr>
                    <td>Título</td>
                    <td>Valor de parcela</td>
                    <td>Valor de Total</td>
                    <td>Ações</td>
               </tr>";

        foreach ($produtos as $produto) {

            $linkVisualizar = url('/produtos/' . $produto->url);
            $linkEditar = url('/produtos/editar/' . $produto->url);
            $linkExcluir = url('/produtos/excluir/' . $produto->url);

            echo  "<tr>
                    <td>{$produto->titulo}</td>
                    <td>R$ " . number_format($produto->preco_parcela, 2, ',', '.') . "</td>
                    <td>R$ " . number_format($produto->preco_total, 2, ',', '.') . "</td>
                    <td><a href='$linkVisualizar'>Visualizar</a> | <a href='$linkEditar'>Editar</a> | <a href='$linkExcluir'>Remover</a></td>
                </tr>";

        }

        echo "</table>";
    }
?>