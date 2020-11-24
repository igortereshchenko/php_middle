<?php

include_once "PageProcessor.php";
include_once "IContent.php";

class SimpleContent extends  PageProcessor implements IContent
{

    public function getString() :string
    {
        $content = $this->page->getContent();
//        TODO smth with content
        return $content;
    }
}