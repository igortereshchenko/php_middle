<?php

include_once "PageProcessor.php";
include_once "ITitle.php";

class BeautyTitle extends PageProcessor implements ITitle
{


    public function getString():string
    {
        $title = $this->page->getTitle();


        return "<h1>".$title."</h1>";
    }

}