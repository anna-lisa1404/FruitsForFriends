<?php

namespace fff\model;
use fff\core\Model as Model;

class Accounts extends fff\core\Model
{
    const TABLENAME = 'accounts';

    protected $schema = [
        'id'        => [ 'type' => Model::TYPE_INT ],
        'username'  => [ 'type' => Model::TYPE_STRING ],
        'password'  => [ 'type' => Model::TYPE_STRING ],
        'email'     => [ 'type' => Model::TYPE_STRING ],
        'firstname' => [ 'type' => Model::TYPE_STRING ],
        'lastname'  => [ 'type' => Model::TYPE_STRING ],
        'gender'    => [ 'type' => Model::TYPE_ ],
        'birthdate' => [ 'type' => Model::TYPE_ ],
    ];
}