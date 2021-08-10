<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    const SHOWPIECE = 1;
}
