<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = ['titulo', 'url', 'descricao', 'preco_parcela', 'preco_total'];

    public $timestamps = false;

}
