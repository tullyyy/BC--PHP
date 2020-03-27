<?php

class Match 
{
  public $begins_at = null;
  public $score = null;
  public $nr_of_players = null;
  public $length = null;
  public function __construct($begins_at = null)
  {
    $this -> begins_at =$begins_at;
  }
  
  public function getEstimatedEnd()
  {
    $end = date('Y-m-d H:i:s', strtotime($this->$begins_at) + $this->length * 60);
  }
  
}