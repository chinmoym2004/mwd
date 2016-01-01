<?php namespace MWD\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model {

	protected $table = 'jobapplied';

	use SoftDeletes;

    protected $dates = ['deleted_at'];

}
