<?php
/*
* bearbeitet von: Anna-Lisa Merkel
*/

class Composition extends Model
{
    const TABLENAME = 'composition_of_drinks';

    protected $schema = [
        'id'                => [ 'type' =>Model::TYPE_INT ],
        'amountInPercent'   => [ 'type' =>Model::TYPE_INT ],
        'drinks_id'         => [ 'type' =>Model::TYPE_INT ],
        'ingredients_id'    => [ 'type' =>Model::TYPE_INT ],
    ];
}