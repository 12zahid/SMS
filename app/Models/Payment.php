<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $primaryKey = 'id';

    protected $fillable = [
        'enrollment_id',
        'amount',
        'payment_date',
        'status'
    ];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
