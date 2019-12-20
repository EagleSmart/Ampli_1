<?php

namespace Cinema\Film\Repositories;

use mysqli as MySQL;
use Cinema\Library\Repositories\ObjectRepository;
use Cinema\Film\Transformers\DictionaryTransformer;

class FilmRepository extends ObjectRepository
{
    protected $tableName  = 'Filmovi';
    protected $primaryKey = 'id';

    public function __construct(MySQL $connection)
    {
        parent::__construct($connection);
        $this->transformer = new FilmoviTransformer($connection);
    }
}


