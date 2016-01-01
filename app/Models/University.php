<?php 

namespace MWD\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class University extends Model {

	protected $table = 'university';

	use SoftDeletes;

    protected $dates = ['deleted_at'];

}
