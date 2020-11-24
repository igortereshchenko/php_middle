<?php

include_once "IPageFactory.php";
include_once "IPage.php";
include_once "BeautyTitle.php";
include_once "SimpleContent.php";
include_once "ITitle.php";
include_once "IContent.php";

class BeautyPageFactory implements IPageFactory
{

    protected $titleRender;
    protected $contentRender;

    /**
     * SimplePageFactory constructor.
     */
    public function __construct(IPage $page)
    {
        $this->titleRender = new BeautyTitle($page);
        $this->contentRender = new SimpleContent($page);
    }

    public function createTitle(): ITitle
    {
        return $this->titleRender;
    }

    public function createContent(): IContent
    {
       return $this->contentRender;
    }
}