<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    
    /**
     * fillable
     *
     * @var array
     */
    
     protected $table = 't_berita';
    protected $fillable = [
    	'image', 'judul', 'konten'];
}
