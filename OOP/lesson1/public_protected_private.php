<?php

class Paragraph{
    public $font_size = "18px";
    protected $font_color = "red";
    private $text = "Hello world!";

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

//    public STATIC
    const copyright = '(c) Igor';

    function __construct($font_color
                        ,$font_size
                        ,$text
                        ){
        $this->font_color = $font_color;
        $this->font_size = $font_size;
        $this->text = $text;
    }

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

$paragraph = new Paragraph("red", 18, "Hello from php");
//$paragraph->text = "new line";
$paragraph->setText("new line");
$paragraph->print_paragraph();

