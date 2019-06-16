<?php namespace Frater260\SimpleBlog\Models;

use Model;

/**
 * Model
 */
class Tag extends Model
{
    use \October\Rain\Database\Traits\Validation;

	public $fillable = ['name'];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'frater260_simpleblog_tag';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

	public $belongsToMany = [
		'entries' => [
			BlogEntry::class,
			'table' => 'frater260_simpleblog_entry_tag',
			'key' => 'tid',
			'otherKey' => 'eid',
		]
	];
}
