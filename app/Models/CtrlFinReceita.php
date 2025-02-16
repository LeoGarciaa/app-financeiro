<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CtrlFinReceita extends Model
{
    /** @use HasFactory<\Database\Factories\CrtFinReceitaFactory> */
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

}
