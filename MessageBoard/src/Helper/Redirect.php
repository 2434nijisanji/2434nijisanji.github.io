<?php

namespace App\Helper;

class Redirect {
    public function __construct(string $uri) {
        header("Location: http://127.0.0.1/MessageBoard/" . $uri);
    }
}