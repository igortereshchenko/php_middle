<?php

include_once "ICommand.php";

class ComplexCommand implements ICommand
{
    //    array
    private $commands;


    public function __construct($commands)
    {
        $this->commands = $commands;
    }


    public function execute()
    {
        foreach ($this->commands as $command)
            $command->execute();
    }
}