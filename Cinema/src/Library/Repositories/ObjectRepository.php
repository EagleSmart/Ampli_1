<?php

namespace Cinema\Library\Repositories;

use Cinema\Library\Exceptions\ItemNotDeletedException;
use Cinema\Library\Exceptions\ItemNotFoundException;
use Cinema\Library\Exceptions\ItemNotSavedException;
use Cinema\Library\Transformers\ObjectTransformer;
use mysqli as MySQL;

class ObjectRepository
{
    /**
     * @var MySQL
     */
    protected $connection;

    /**
     * @var ObjectTransformer
     */
    protected $transformer;

    protected $tableName;
    protected $primaryKey;

    public function __construct(MySQL $connection)
    {
        $this->connection = $connection;
    }

    public function all()
    {
        $result = $this->connection->query("SELECT * FROM $this->tableName");
        $transformed = $this->transformer->toObjectArray($result);

        mysqli_free_result($result);
        return $transformed;
    }