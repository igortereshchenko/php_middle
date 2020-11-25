<?php

include_once "ICommand.php";

class FileCommand implements ICommand
{

    public function execute()
    {
        echo "file command \n";
    }
}