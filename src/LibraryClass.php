<?php

namespace MyLib;

class LibraryClass
{
    public function __construct()
    {
        var_dump(static::class);
        echo '<br>';
    }
}