<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|string|null name
 * @property array|string|null gender
 * @property array|string|null phone
 * @property array|string|null village
 * @property array|string|null commune
 * @property array|string|null district
 * @property array|string|null province
 * @property array|string|null dob
 */
class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = [
        'name','gender', 'phone','village','commune','district','province', 'dob'
    ];
    public $timestamps = false;

    /**
     * Employees can have many position;
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function positions()
    {
        return $this->hasMany('App\Model\Position');
    }

}
