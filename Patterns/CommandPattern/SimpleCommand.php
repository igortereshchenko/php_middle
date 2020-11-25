<?php

include_once "ICommand.php";

class SimpleCommand implements ICommand
{

    public function execute()
    {
        echo "Simple coomand \n";
    }
}