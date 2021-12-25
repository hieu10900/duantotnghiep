<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Service extends Model
{
    use HasFactory;
    use Notifiable, SoftDeletes;
    protected $table = 'services';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'price',
        'quantity',
    ];
}
