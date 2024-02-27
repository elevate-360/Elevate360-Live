<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    protected $table = 'tblContactDetails';
    protected $primaryKey = 'cdId';

    // Disable timestamps for this model
    public $timestamps = false;
}
