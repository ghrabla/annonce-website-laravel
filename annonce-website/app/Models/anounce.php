<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anounce extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id',
    'type',
    'photo',
    'description',
    'deleted_at',
    'likes',
    'created_at',
    'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-M-Y H:i');
    }
    // public function getCreatedAtAttribute($value)
    // {
    //     return \Carbon\Carbon::parse($value)->format('d-M-Y H:i:s');
    // }
}
