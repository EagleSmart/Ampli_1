<?php

namespace Amplitudo\Exceptions;

use Exception;

class CollectionOverflowException extends Exception {
    
    public function __construct(){
        parent::__construct('Index out of range', 403, null);
    }
}