<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Imoveis;
use Illuminate\Http\Request;

class ImoveisController extends Controller
{
    private $repository;

    public  function __construct(Imoveis $imoveis)
    {
        $this->repository = $imoveis;
    }
    public function showCadastrar()
    {
        $imoveis = $this->repository->latest()->paginate(10);
        return view('cadastro',[
            'imoveis' => $imoveis,
        ]);
    }
    public function postCadastrar(Request $dados)
    {
        $add = new Imoveis;
        $add->tipo = $dados->ncasaapto;
        $add->qtdquartos = $dados->nquartos;
        $add->qtdsalasestar = $dados->nsala_estar;
        $add->qtdvagasgaragem = $dados->nvagas_garagem;
        $add->area = $dados->narea;
        $add->armariosembutidos = $dados->varmario;
        $add->descricao = $dados->ndescricao;
        $add->qtdsalasjantar = $dados->nsala_jantar;
        $add->qtdsuites = $dados->nsuites;
        $add->andar = $dados->nandar;
        $add->valorcondominio = $dados->nvalor_condominio;
        $add->portaria24h = $dados->pportaria;
        $add->preco = $dados->nvalor_aluguel;
        $add->rua = $dados->nrua;
        $add->Bairro = $dados->nbairros;
        $add->Cidade = $dados->ncidade;
        $add->CEP = $dados->ncep;
        $add->Estados = $dados->nestado;
        $add->Pais = $dados->npais;
        $add->Numero = $dados->nnumero;
        $add->save();
        echo '<script language="javascript">';
        echo 'alert("Cadastro realizado com sucesso.")'; 
        echo '</script>';
        return redirect()->action('Admin\ImoveisController@visualizar');
    }
    public function visualizar()
    {

        $imoveis = $this->repository->latest()->paginate(10);
        return view('visualizar', [
            'imoveis' => $imoveis,
        ]);
    }

    public function detalhe($id)
    {
        $imovel = $this->repository->where('id', $id)->first();
        if (!$id)
            return redirect()->back();
        return view('detalhes', [
            'imovel' => $imovel,
        ]);
    }
    public function search(Request $request)
    {
        $imoveis = $this->repository->search($request->filter);
        return view('visualizar', [
            'imoveis' => $imoveis,
        ]);
    }
}
