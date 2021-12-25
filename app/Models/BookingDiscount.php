<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class BookingDiscount extends Model
{
    // use HasFactory;
    // use Notifiable, SoftDeletes;
    protected $table = 'booking_discount';
    // protected $primaryKey = 'id';

    protected $fillable = [
        'booking_id',
        'discount_id',
    ];
    // public function discount(){
    //     return $this->belongsToMany(Discount::class , 'booking_discount', 'booking_id', 'discount_id');
    // }
    // public function service(){
    //     return $this->belongsToMany(Service::class , 'booking_service', 'booking_id', 'service_id');
    // }
    // public function room(){
    //     return $this->belongsTo(Room::class, 'room_id', 'id');
    // }
}
