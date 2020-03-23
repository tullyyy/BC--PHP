
<?php
// http://www.cbp-basicphp.test:8080/Week5/Day25/get.php?name=me
// http://www.cbp-basicphp.test:8080/Week5/Day25/get.php?name=me&surname=monkey

var_dump($_GET);
if(isset($_GET[ 'name' ])){
  echo 'Hello ' . $_GET[ 'name' ] . ' ' . $_GET[ 'surname' ];
}else {
  echo 'Hello World';
}
?>