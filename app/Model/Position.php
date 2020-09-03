<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';
    protected $fillable = [
        'title',
        'description'
    ];

    /**
     * A position is own by Employees;
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
   {
       return $this->belongsTo('App\Model\Employee');
   }
}
