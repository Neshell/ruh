<?php

namespace Core;

use PDO;

class Model
{
    protected $dataConnect;

    public function __construct()
    {
        $this->dataConnect = new PDO("mysql:host=localhost;dbname=Ruhanka;charset=utf8", 'root', '');
    }
}
