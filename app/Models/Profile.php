<?php 

namespace MWD\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model {

	protected $table = 'profile';

	use SoftDeletes;

    protected $dates = ['deleted_at'];

}
