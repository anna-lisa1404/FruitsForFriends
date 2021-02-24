<?php

class Drinks extends Model 
{
    const TABLENAME = 'drinks';

    protected $schema = [
        'id'            => [ 'type' => Model::TYPE_INT ],
        'name'          => [ 'type' => Model::TYPE_STRING ],
        'typeOfDrink'   => [ 'type' => Model::TYPE_ENUM ],
        'taste'         => [ 'type' => Model::TYPE_STRING ],
        'price'         => [ 'type' => Model::TYPE_DECIMAL ],
    ];

}