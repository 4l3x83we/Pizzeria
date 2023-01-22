<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: Additives.php
 * User: ${USER}
 * Date: 21.${MONTH_NAME_FULL}.2023
 * Time: 6:53
 */

namespace App\Models\Admin\Additives;

use Illuminate\Database\Eloquent\Model;

class Additives extends Model
{
    protected $fillable = [
        'add_labelling',
        'add_name',
    ];
}
