<?php
/*
* bearbeitet von: Anna-Lisa Merkel
*/

class Accounts extends Model
{
    const TABLENAME = 'accounts';

    protected $schema = [
        'id'                => [ 'type' => Model::TYPE_INT ],
        'username'          => [ 'type' => Model::TYPE_STRING ],
        'password'          => [ 'type' => Model::TYPE_STRING ],
        'email'             => [ 'type' => Model::TYPE_STRING ],
        'firstname'         => [ 'type' => Model::TYPE_STRING ],
        'lastname'          => [ 'type' => Model::TYPE_STRING ],
        'gender'            => [ 'type' => Model::TYPE_ENUM ],
        'birthdate'         => [ 'type' => Model::TYPE_DATE ],
        'addresses_id'      => [ 'type' => Model::TYPE_INT ],
    ];
}