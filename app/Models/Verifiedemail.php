<?php namespace MWD\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Verifiedemail extends Model {

	protected $table = 'verifiedemail';

	use SoftDeletes;

    protected $dates = ['deleted_at'];

}
