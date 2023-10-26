<?php

namespace Source\Models\CafeApp;

use Source\Core\Model;

class AppCategory extends Model
{
    public function __construct()
    {
        parent::__construct("category", ["id"], ["name", "type"]);
    }
}