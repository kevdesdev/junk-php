<style>
  .box {
    background-color: black;
  }
</style>

<?php
  class Box {
    private $width, $height, $x, $y, $color;
    
    public function __construct ($width = "100px", $height = "100px", $x = "30", $y = "40", $color="black") {
       $this->width = $width;
        $this->height = $height;
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
    }
    
    private function gen_tag() {
      return "<div class=\"box\" 
              style=\"position:absolute;
                      width:$this->width;
                      height:$this->height;
                      left:$this->x;
                      top:$this->y;
                      background-color:$this->color;
               \">";
    }
    
    public function show() {
      echo $this->gen_tag();
    }
  }


$box1 = new Box();
$box1->show();

$box2 = new Box("200px", "200px", "340px", "230px", "blue");
$box2->show();

?>