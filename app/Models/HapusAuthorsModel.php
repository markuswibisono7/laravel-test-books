<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HapusAuthorsModel extends Model
{
    use HasFactory;

    protected $table = 'tbauthors';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'created_at', 'updated_at'];
    
}