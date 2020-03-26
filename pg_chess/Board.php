<?php


class Board 
{
  public $x_coord = null;
  public $y_coord = null;
  public $piece = null;


  public function __toString(){
    return "";
}

public function __construct(){
  return "";
}

// $positions=
// [
//   1 => [8 => 'r', 7 => 'p', 2 => 'P', 1 => 'R'],
//   2 => [8 => 'n', 7 => 'p', 2 => 'P', 1 => 'N'],
//   3 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
//   4 => [8 => 'q', 7 => 'p', 2 => 'P', 1 => 'Q'],
//   5 => [8 => 'k', 7 => 'p', 4 => 'P', 1 => 'K'],
//   6 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
//   7 => [8 => 'n', 7 => 'p', 2 => 'P', 1 => 'N'],
//   8 => [8 => 'r', 7 => 'p', 2 => 'P', 1 => 'R'],
// ];

}


// It's purpose is to render (in it's __toString method) the entire board - 8 rows, each containing 8 squares, each potentionally containing a piece.

// It's __construct method will accept one argument - a multidimensional array of arrays where each item describes one row and contains information about the positions of pieces in that row.

// Here's something for the __construct method for you to test it with:

// [
//     1 => [8 => 'r', 7 => 'p', 2 => 'P', 1 => 'R'],
//     2 => [8 => 'n', 7 => 'p', 2 => 'P', 1 => 'N'],
//     3 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
//     4 => [8 => 'q', 7 => 'p', 2 => 'P', 1 => 'Q'],
//     5 => [8 => 'k', 7 => 'p', 4 => 'P', 1 => 'K'],
//     6 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
//     7 => [8 => 'n', 7 => 'p', 2 => 'P', 1 => 'N'],
//     8 => [8 => 'r', 7 => 'p', 2 => 'P', 1 => 'R'],
// ]
// The expected usage:

// $positions_on_turn_1 = [
//     1 => [8 => 'r', 7 => 'p', 2 => 'P', 1 => 'R'],
//     2 => [8 => 'n', 7 => 'p', 2 => 'P', 1 => 'N'],
//     3 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
//     4 => [8 => 'q', 7 => 'p', 2 => 'P', 1 => 'Q'],
//     5 => [8 => 'k', 7 => 'p', 4 => 'P', 1 => 'K'],
//     6 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
//     7 => [8 => 'n', 7 => 'p', 2 => 'P', 1 => 'N'],
//     8 => [8 => 'r', 7 => 'p', 2 => 'P', 1 => 'R'],
// ];
 
// $board_on_turn_1 = new Board($positions_on_turn_1);
// echo $board_on_turn_1;
