<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UbahAuthorsModel extends Model
{
    use HasFactory;

    protected $table = 'tbauthors';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'updated_at'];
    
}