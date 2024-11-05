<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HapusBukuModel extends Model
{
    use HasFactory;

    protected $table = 'tbbooks';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'serial_number', 'published_at', 'author_id', 'created_at' , 'updated_at'];
    
}