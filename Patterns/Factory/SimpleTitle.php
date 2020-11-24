<?php

include_once "PageProcessor.php";
include_once "ITitle.php";

class SimpleTitle extends PageProcessor implements ITitle
{

    public function getString():string
    {
        $title = $this->page->getTitle();
        //TODO smth with title

        return $title;
    }
}