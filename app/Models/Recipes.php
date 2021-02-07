<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipes extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'user_id', 
        'recipeTitel',
        'recipeText',
        'dataUpload'
    ]; 

    public function user()
    {
        return $this->belongsTo(User::class); 
    }
    
}
