<?php

namespace App\Models;

use SplObserver;
use SplSubject;

class Logger implements SplObserver {

    private $filename;

    public function __construct()
    {
        $this->filename = public_path(). "\logs\log.log";
    }

    public function update(SplSubject $repository, string $event = null, $data = null): void
    {
        $entry = date("Y-m-d H:i:s") . ": '$event' with data '" . json_encode($data) . "'\n";
        file_put_contents($this->filename, $entry, FILE_APPEND);
    }
}
