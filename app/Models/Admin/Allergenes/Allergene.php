<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: Allergene.php
 * User: ${USER}
 * Date: 21.${MONTH_NAME_FULL}.2023
 * Time: 6:54
 */

namespace App\Models\Admin\Allergenes;

use Illuminate\Database\Eloquent\Model;

class Allergene extends Model
{
    protected $table = 'allergenes';
    protected $fillable = [
        'all_labelling',
        'all_name',
    ];
}
