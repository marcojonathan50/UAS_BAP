<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class formBank extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'form_banks';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'Norek', 'Nama', 'File', 'Created_by'];

    
}
