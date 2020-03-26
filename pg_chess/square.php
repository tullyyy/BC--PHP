<?php


class Square 
{
public $x_coord = null;
public $y_coord = null;
public $piece = null;


public function __construct($x, $y, $piece =null){
  $this->x_coord = $x; 
  $this->y_coord = $y;
  $this->piece = $piece;
}


public function isDark(){
if(($this->x_coord % 2 == 0 && $this->y_coord % 2 == 0) || ($this->x_coord % 2 == 1 && $this->y_coord % 2 == 1)){
 return true;
}

}

public function __toString()
{
  if ($this->isDark()){
    return "<div class='light'>{$this->piece}</div>";
  } 
  if(!$this->isDark()){
    return "<div class='dark'>{$this->piece}</div>";
  }
   
}
}