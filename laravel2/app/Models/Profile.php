<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    /**
     * fillable
     *
     * @var array
     */
    
    protected $table = 't_profile';

    protected $fillable = [
    	'judul', 'deskripsi'];
}
