<?php

class Piece 
{
  public $type = null;
  public $images = [
      'K' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png',
      'Q' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png',
      'B' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/bishop.png',
      'N' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/knight.png',
      'R' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/rook.png',
      'P' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/pawn.png',
      'k' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/king.png',
      'q' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/queen.png',
      'b' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/bishop.png',
      'n' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/knight.png',
      'r' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/rook.png',
      'p' => 'https://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/pawn.png'
  ];

  public function __construct($type){
      $this->type = $type;
  }

  public function __toString(){
    return "<img src={$this->images[$this->type]}>";
}


}



// $type will eventually contain one of the characters K, Q, B, N, R, P, k, q, b, n, r, p
// $images is there only as a "storage" for the array of types and their respective image URLs.