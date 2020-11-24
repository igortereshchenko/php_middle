<?php

include_once "ITitle.php";
include_once "IContent.php";

interface IPageFactory
{
    public function createTitle():ITitle;
    public function createContent():IContent;

}