<?php namespace Pensoft\Impact\Models;

use Model;
use October\Rain\Database\Traits\Sortable;

/**
 * Model
 */
class Sheet extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;
    use Sortable;


    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pensoft_impact_sheets';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'cover' => 'System\Models\File',
        'file' => 'System\Models\File'
    ];

    public $belongsTo = [
        'group' => Group::class
    ];
}
