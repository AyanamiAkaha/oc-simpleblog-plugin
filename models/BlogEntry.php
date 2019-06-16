<?php namespace Frater260\SimpleBlog\Models;

use Model;

/**
 * Model
 */
class BlogEntry extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'frater260_simpleblog_entry';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

	public $belongsTo = [
		'category' => Category::class,
	];
	public $belongsToMany = [
		'tags' => [
			Tag::class,
			'table' => 'frater260_simpleblog_entry_tag',
			'key' => 'eid',
			'otherKey' => 'tid',
		],
	];

	protected function beforeSave() {
		if($this->summary == null || $this->summary == '') {
			$this->summary = mb_substr($this->text, 0, 150) . ' [...]';
		}
	}
}
