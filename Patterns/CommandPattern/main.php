<?php

include_once "ComplexCommand.php";
include_once "SimpleCommand.php";
include_once "FileCommand.php";
include_once "NetworkCommand.php";

$command_package = new ComplexCommand( [new SimpleCommand(), new FileCommand(), new FileCommand(), new NetworkCommand() ] );

$command_package->execute();

