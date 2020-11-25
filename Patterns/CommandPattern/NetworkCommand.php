<?php

include_once "ICommand.php";
class NetworkCommand implements ICommand
{

    public function execute()
    {
        echo "Network command";
    }
}