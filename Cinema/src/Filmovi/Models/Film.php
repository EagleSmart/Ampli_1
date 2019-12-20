<?php

namespace Cinema\Film\Models;

class Film
{
    public $id;
    public $naziv;
    public $trajanje;

    public function __construct($id, $naziv, $trajanje)
    {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->trajanje = $trajanje;
    }
    
    public function __toString()
    {
        return $this->naziv;
    }

    public function __toArray()
    {
        return [
            'id' => $this->id,
            'naziv' => $this->naziv,
            'trajanje' => $this->trajanje,
        ];
    }
}