<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();

        return view('index')->with('produtos', $produtos);
    }


    public function show($url)
    {
        $produto = Produto::where('url', $url)->get();

        if(!empty($produto)){
            return view('exibir')->with('produto', $produto);
        } else {
            return redirect()->action('ProdutosController@index');
        }
    }

    public function create()
    {
        return view('criar');
    }

    public function store(Request $request)
    {

        $produtoSlug = $this->setUrl($request->titulo);

        $produto = [
            'titulo' => $request->titulo,
            'url' => $produtoSlug,
            'descricao' => $request->descricao,
            'preco_parcela' => $request->preco_parcela,
            'preco_total' => $request->preco_total
        ];

        Produto::create($produto);

        return redirect()->action('ProdutosController@index');
    }


    public function edit($url)
    {
        $produto = Produto::where('url', $url)->get();

        if(!empty($produto)){
            return view('editar')->with('produto', $produto);
        } else {
            return redirect()->action('ProdutosController@index');
        }
    }
    public function update(Request $request, $id)
    {
        $produtoSlug = $this->setUrl($request->titulo);

        $produto = Produto::find($id);

        $produto->titulo = $request->titulo;
        $produto->url = $produtoSlug;
        $produto->descricao = $request->descricao;
        $produto->preco_parcela = $request->preco_parcela;
        $produto->preco_total = $request->preco_total;

        $produto->save();

        return redirect()->action('ProdutosController@index');

    }

    public function destroy($url)
    {
        $produto = Produto::where('url', $url)->get();

        if(!empty($produto)){
            DB::delete("DELETE FROM produtos WHERE url = ?", [$url]);
        }

        return redirect()->action('ProdutosController@index');
    }

    private function setUrl($titulo){

        $produtoSlug = str_slug($titulo);

        $produtos = Produto::all();

        $t = 0;
        foreach ($produtos as $produto){
            if(str_slug($produto->titulo) === $produtoSlug){
                $t++;
            }
        }

        if($t > 0){
            $produtoSlug = $produtoSlug . '-' . $t;
        }

        return $produtoSlug;

    }
}
