<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Discount extends Model
{
    use HasFactory;
    use Notifiable, SoftDeletes;
    protected $table = 'discounts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'full_name',
        'code',
        'quantity',
        'discount_rate',
        'status',
    ];
    public function quantity() {
        $this->quantity--;
        return $this->save();
    }
}
