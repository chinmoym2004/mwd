<?php 

namespace MWD\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate extends Model {

	protected $table = 'certificates';

	use SoftDeletes;

    protected $dates = ['deleted_at'];

}
