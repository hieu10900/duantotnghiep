<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;
    protected $table = 'supports';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'user_id',
        'email',
        'phone',
        'status',
        'subject',
        'message'
        
    ];
}
