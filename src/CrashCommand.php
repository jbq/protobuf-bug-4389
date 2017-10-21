<?php

declare(strict_types=1);

require "vendor/autoload.php";

class CrashCommand
{
    public function execute() {
        $obj    = new \Test();
        $obj->setV(array('0' => 't0', '2' => 't2'));

        echo $obj->serializeToJsonString();
        echo("\n");
    }
}

(new CrashCommand())->execute();
