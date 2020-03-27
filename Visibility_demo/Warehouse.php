<?php 

class Warehouse 
{
  public $name = null;
  protected $nr_of_crates = 0;
  protected $crates = [];

  public function addCrate($contents)
  {
    $this->nr_of_crates++;
    $this->crates[] = $contents;
  }

}



// This code would actually have an effect depending on the visibility. 
class SmallWarehouse extends Warehouse 
{
  public function addCrate2()
  {
    $this->nr_of_crates++;
    $this->crates[] = $contents;
  }
}