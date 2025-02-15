<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imoveis extends Model
{
    //
   
    protected $fillable = ['tipo', 'qtdquarto',  'qtdsalasestar', 'qtdvagasgaragem', 'area', 'armariosembutidos', 'descricao', 'qtdsalasjantar', 'qtdsuites', 'andar', 'valorcondominio', 'portaria24h', 'preco', 'rua', 'Bairro', 'Cidade', 'Estados', 'Pais', 'Numero', 'Complemento'];
    public function search($filter = null)
    {
        $results = $this->where('Bairro', 'LIKE', "%{$filter}%")
            ->orWhere('descricao', 'LIKE', "%{$filter}%")
            ->paginate();
        return $results;
    }
}
