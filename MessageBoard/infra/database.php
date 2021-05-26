<?php

namespace Infra;

use PDO;

class Database {
    static function getPDO() {
        return new PDO("mysql:dbname=message-board;host=127.0.0.1", "root", "");
    }
}
