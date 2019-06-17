<h1>Visualizar Produto</h1>

<?php

        if(!empty($produto)){

            foreach ($produto as $prop){
                ?>

                    <h2>Título do produto: <?= $prop->titulo; ?> </h2>

                    <p>Descrição: <?= $prop->descricao; ?>  </p>

                    <p>Valor do Parcela: R$ <?= number_format($prop->preco_parcela, 2, ',', '.'); ?> </p>

                    <p>Valor de total: R$ <?= number_format($prop->preco_total , 2, ',', '.'); ?> </p>

                <?php

            }
        }


