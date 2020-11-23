<?php

class MyClass {

}


$obj = new MyClass();

echo var_dump($obj);


class Paragraph{
    public $font_size = "18px";
    public $font_color = "red";
    public $text = "Hello world!";

//    public STATIC
    const copyright = '(c) Igor';

//    use self for STATIC
    public function print_copyright(){
        echo self::copyright;
    }

    public function print_paragraph(){
        echo "<p style = '
                        font-size: ".$this->font_size.";"
                        ."color:".$this->font_color
                        ."'
               >"
            .$this->text
            ."</p>"
            ."<br>";
    }
}

$paragraph = new Paragraph();
$paragraph->print_paragraph();

$paragraph->print_copyright();


$paragraph2 = new Paragraph();

$paragraph2->font_color="blue";
$paragraph2->font_size =30.4;

$paragraph2->print_paragraph();
$paragraph2->print_copyright();
