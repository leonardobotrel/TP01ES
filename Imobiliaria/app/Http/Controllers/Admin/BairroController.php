<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bairro;

class BairroController extends Controller
{
    private $repository;
    public function __construct(Bairro $Bairro)
    {
        $this->repository = $Bairro;
    }
    public function index(){

        
        $Bairro = $this ->repository->all();
        return view('cadastro',[
            'Bairros' =>$Bairro,
        ]);
    }
    public function view(){
        $Bairro = $this->repository->all();
        return view('viewallBairros',[
        'Bairro' =>$Bairro,
         ] );
    }
}
