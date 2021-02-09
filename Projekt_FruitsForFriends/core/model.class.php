<?php

// TODO: add namespace again
// namespace fff\model;

abstract class Model
{
    const TYPE_STRING   = 'string';
    const TYPE_INTEGER  = 'int';
    const TYPE_DATE = 'date';
    const TYPE_ENUM = 'enum';

    protected $schema = [];
    protected $data = [];
}