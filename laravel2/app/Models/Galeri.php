<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    
    /**
     * fillable
     *
     * @var array
     */

    protected $table = 't_galeri';

    protected $fillable = ['id','image'];
}
