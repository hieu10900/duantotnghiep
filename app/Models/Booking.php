<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use HasFactory;
    use Notifiable, SoftDeletes;
    protected $table = 'bookings';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'room_id',
        'phone',
        'guest_email',
        'guest_name',
        'amount_of_people',
        'check_in',
        'check_out',
        'status',

    ];
    public function cancelBooking() {
        $this->status = 4;
        return $this->save();
    }
    public function approveBooking() {
        $this->status = 1;
        return $this->save();
    }
    public function discount(){
        return $this->belongsToMany(Discount::class , 'booking_discount', 'booking_id', 'discount_id');
    }
    public function service(){
        return $this->belongsToMany(Service::class , 'booking_service', 'booking_id', 'service_id');
    }
    public function room(){
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
    public function evaluate(){
        return $this->hasMany(Evaluate::class, 'booking_id', 'id');
    }
}
