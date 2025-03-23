<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CtrlFinDespesa extends Model
{
    /** @use HasFactory<\Database\Factories\CtrlFinDespesaFactory> */
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];


    public function categoria(): HasOne
    {
        return $this->hasOne(CtrlFinCategoria::class)
    }
}
;