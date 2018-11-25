<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Carbon\Carbon;

class Customer extends Model
{
    protected $table = 'Customers';
    protected $primaryKey = 'CustomerID';
    protected $fillable = [
        'Code',
        'Name',
        'Address1',
        'Address2',
        'City',
        'PostCode',
        'Telephone',
        'Mobile',
        'Comments',
        'Currency',
        'PaymentType',
        'PaymentTerm',
        'DeliveryTime1',
        'DeliveryTime2',
        'PriceCode1',
        'PriceCode2',
        'PriceCode3',
        'CreditLimit',
        'Balance',
        'ClearBalance',
        'InRoute'
    ];
}
