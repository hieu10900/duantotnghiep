<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluate extends Model
{
    use HasFactory;
    protected $table = 'evaluate';
    protected $primaryKey = 'id';
    protected $fillable = [
       
        'booking_id',
        'content',
    ];
    public function booking(){
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }
}
