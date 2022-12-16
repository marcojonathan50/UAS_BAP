<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class formPromo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'form_promos';

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
    protected $fillable = ['nama_promo', 'deskripsi_promo', 'diskon', 'tombol', 'foto'];

    
}
