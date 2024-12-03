<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KredentialCustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_uuid',
        'email_akses',
        'profil_akes',
        'pin',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_uuid', 'uuid'); // Adjust the foreign key and local key as necessary
    }
}