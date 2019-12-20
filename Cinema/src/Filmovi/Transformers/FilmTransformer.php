<?php

namespace Cinema\Film\Transformers;

use Cinema\Filmovi\Models\Filmovi;
use Cinema\Library\Transformers\ObjectTransformer;

class FilmTransformer extends ObjectTransformer
{
    protected $fields = [
        'id'       => 'int',
        'naziv'    => 'string',
        'trajanje' => 'string',
    ];

    public function toObject($array)
    {
        return new Film(
            $array['id'] ?? 0,
            $array['naziv'] ?? '',
            $array['trajanje'] ?? ''
        );
    }
}

