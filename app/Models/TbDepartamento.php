<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbDepartamento extends Model
{
    use HasFactory;

    protected $table = 'tb_departamento';

    protected $fillable = [
        'dept_nome',
    ];

    public function funcionarios()
    {
        return $this->hasMany(TbFuncionario::class, 'dept_cod');
    }
}
