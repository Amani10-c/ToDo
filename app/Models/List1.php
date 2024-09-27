<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class List1 extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'date',
        'title',
        'description',
        'user_id', 
    ];
    
    protected $table = 'list1'; 


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id'); 
    }

   
}
