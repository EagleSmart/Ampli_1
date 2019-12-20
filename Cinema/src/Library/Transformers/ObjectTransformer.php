<?php

namespace Cinema\Library\Transformers;

use mysqli_result as MySqlResult;
use mysqli as MySQL;

abstract class ObjectTransformer
{
    /**
     * @var MySQL
     */
    protected $connection;
    protected $fields;
    public function __construct(MySQL $connection)
    {
        $this->connection = $connection;
    }
    public abstract function toObject($array);

    public function toObjectArray(MySqlResult $set) 
    {
        $output = [];
        while ($item = $set->fetch_assoc()) {
            $output[] = $this->toObject($item);
        }
        return $output;
    }
