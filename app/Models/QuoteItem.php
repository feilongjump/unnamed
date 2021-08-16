<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class QuoteItem extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'quote_items';
    
}
