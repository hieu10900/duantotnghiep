<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'introduce',
        'room_type',
        'price',
        'introduce_of_room',
        'status',
        'feature_image_path'
        
    ];
    public function room_types()
    {
        return $this->belongsTo(RoomTyPe::class, 'room_type', 'id');
    }
    public function imageRoom()
    {
        return $this->hasMany(ImageRoom::class, 'room_id', 'id');
    }
    public function comment()
    {
        return $this->hasMany(Comment::class, 'room_id', 'id');
    }
}
