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
    public function cadastrar()
    {
        return view('cadastro');
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
