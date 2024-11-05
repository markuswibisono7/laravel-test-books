<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsertAuthorsModel extends Model
{
    use HasFactory;

    protected $table = 'tbauthors';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name','email', 'created_at', 'updated_at'];
 
    
    
}