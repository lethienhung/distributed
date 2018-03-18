<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;
class Tree extends Model
{
    use SyncsWithFirebase;
    public $table = 'trees';
    public $fillable = [
        'id',
        'tree_id',
        'tree_name',
        'tree_age',
        'tree_location_lat',
        'tree_location_lng',
        'tree_category',
        'tree_capacity',
        'tree_note',
        'tree_status'
    ];
    public $visible = [
        'id',
        'tree_id',
        'tree_name',
        'tree_age',
        'tree_location_lat',
        'tree_location_lng',
        'tree_category',
        'tree_capacity',
        'tree_note',
        'tree_status'
    ];
}
