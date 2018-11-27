<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Carbon\Carbon;

class Product extends Model
{
    protected $table = 'Products';
    protected $primaryKey = 'ProductID';
    protected $fillable = [
        'GroupID',
        'Code',
        'CatalogCode',
        'Description1',
        'Description2',
        'Size',
        'UnitRate1',
        'Unit1',
        'Unit2',
        'DefaultUnit',
        'VAT',
        'Notes',
        'Barcode1',
        'Barcode2',
        'Barcode3',
        'Barcode4',
        'Stock',
        'Status',
        'NewRange'
    ];
}
