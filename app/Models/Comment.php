<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    use HasFactory;
    use Notifiable, SoftDeletes;
    protected $table = 'comments';
    protected $primaryKey = 'id';

    protected $fillable = [
        'created_by',
        'updated_by',
        'content',
        'room_id'
        
    ];
    public function rooms()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
