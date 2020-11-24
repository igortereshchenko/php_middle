<?php

include_once "IPage.php";
include_once "SimplePageFactory.php";
include_once "BeautyPageFactory.php";

class MyPage implements IPage
{



    public function getTitle(): string
    {
        return "PHP OOP";
    }

    public function getContent(): string
    {
        return "some content";
    }
}


class ProfyPage implements IPage{

    protected $title;
    protected $content;

    /**
     * ProfyPage constructor.
     * @param $title
     * @param $content
     */
    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function setNewTitleContent($title, $content){
        $this->title = $title;
        $this->content = $content;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}

//build simple page
$page = new MyPage();

$page = new ProfyPage('Title','content');

$simpleFactory = new SimplePageFactory($page);

echo $simpleFactory->createTitle()->getString();
echo $simpleFactory->createContent()->getString();

//beautiful page

$page->setNewTitleContent("New title", 'new content');

$beautifulFactory = new BeautyPageFactory($page);


echo $beautifulFactory->createTitle()->getString();
echo $beautifulFactory->createContent()->getString();