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

        $imoveis = $this->repository->paginate();
        return view('visualizar', [
            'imoveis' => $imoveis,
        ]);
    }
    public function cadastrocasa()
    {

        return view('cadastroCasa');
    }
}
