<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'image',
        'view',
        'content',
        'created_by',
    ];
    public function incrementReadCount() {
        $this->view++;
        return $this->save();
    }
    public function author(){
        return $this->belongsTo(User::class, 'created_by' , 'id');
    }
}
