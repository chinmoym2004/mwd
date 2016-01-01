<?php namespace MWD\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Internshipapplied extends Model {

	protected $table = 'applied_interns';

	use SoftDeletes;

    protected $dates = ['deleted_at'];

}
