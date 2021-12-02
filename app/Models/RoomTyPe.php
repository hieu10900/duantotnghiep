<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomTyPe extends Model
{
    use HasFactory;
    protected $table = 'room_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'image',
        'introduce',
        
    ];
    public function rom(){
        return $this->hasMany(Room::class, 'room_type', 'id');
    }
}
