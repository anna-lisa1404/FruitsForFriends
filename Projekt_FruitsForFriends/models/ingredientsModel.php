<?php
/*
* bearbeitet von: Anna-Lisa Merkel
*/

class Ingredients extends Model
{
    const TABLENAME = 'ingredients';

    protected $schema = [
        'id'            => [ 'type' => Model::TYPE_INT ],
        'description'   => [ 'type' => Model::TYPE_STRING ],
        'category'      => [ 'type' => Model::TYPE_STRING ],
        'origin'        => [ 'type' => Model::TYPE_STRING ],
    ];
}