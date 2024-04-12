<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dream extends Model
{
    use HasFactory;
    use SoftDeletes;//вспомагательный трейт для мягкого удаления

    protected $table = 'dreams';
    protected $guarded = [];//или protected $guarded = false; означает разрешить добавление атрибутов в дб


}
