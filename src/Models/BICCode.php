<?php

namespace ZarulIzham\AutoDebit\Models;

use Illuminate\Database\Eloquent\Model;

class BICCode extends Model
{
    public function getTable()
    {
        return config('autodebit.table_name.bic_codes', parent::getTable());
    }

    protected $fillable = [
        'bank_name',
        'bank_code',
        'bic_code',
    ];
}
