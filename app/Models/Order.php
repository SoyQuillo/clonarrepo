<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'date_order',
        'total',
        'route',
        'status',
        "registered_by",
        'client_id',
    ];

    protected $guarded = ['id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function serviceStation()
    {
        return $this->belongsTo(ServiceStation::class);
    }
}