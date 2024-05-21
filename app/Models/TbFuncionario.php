<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TbDepartamento;

class TbFuncionario extends Model
{
    use HasFactory;

    protected $table = 'tb_funcionario';

    protected $fillable = [
        'fun_nome',
        'fun_email',
        'fun_cpf',
        'fun_idade',    
        'dept_cod',
    ];
    
    public function departamento()
    {
        return $this->belongsTo(TbDepartamento::class, 'dept_cod');
    }

}
