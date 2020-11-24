<?php


include_once "PageProcessor.php";
include_once "ITitle.php";

class IOSTitle extends PageProcessor implements ITitle
{


    public function getString():string
    {
        $title = $this->page->getTitle();


        return ">>>>>>>>>>>".$title."<<<<<<<<<<<<<<<<";
    }
}