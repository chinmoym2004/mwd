<?php namespace MWD\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Internship extends Model {

	protected $table = 'interns';

	use SoftDeletes;

    protected $dates = ['deleted_at'];

}
