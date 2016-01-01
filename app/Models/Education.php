<?php namespace MWD\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model {

	protected $table = 'educations';

	use SoftDeletes;

    protected $dates = ['deleted_at'];

}
