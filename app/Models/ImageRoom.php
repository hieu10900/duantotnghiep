<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageRoom extends Model
{
    use HasFactory;
    protected $table = 'image_rooms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'room_id',
        'image',
        
    ];
    public function imageRoom(){
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
}
