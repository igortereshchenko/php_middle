<?php

include_once "IPage.php";

abstract class PageProcessor
{
    protected $page;


    public function __construct(IPage $page)
    {
        $this->page = $page;
    }
}