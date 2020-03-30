<?php

// $_GET
// $_POST

[
  'orderby' => 'name',
  'way' => 'desc'
];
// ?orderby=name&way=desc


// $_GET = [
//   'orderby' => 'name',
//   'way' => 'desc'
// ];

// $_POST = [
//   'username' => 'bruce',
//   'password' => 'selina'
// ];

// Turning a virtual object (associative array) into a string and using it in the browser, and vice versa. 


// $_GET = ['orderby'];
// this would work 

// $_GET = ['search_term'];
// this would NOT work because you're working with an element that does not exist, so you must first check if it exists and then access it

// if (isset($_GET = ['search_term'])){
  // if($_GET = ['search_term'] == 'horizon')
// };
// this would work--- first you check if the element exists and then you access it 


// writing this in plain English

// if there's a search term in the URL 
// then let's use it to search within the DB
// otherwise
// don't do a search at all


// writing this in plain English

            // if there's a search term in the URL 
      //  if (isset($_GET = ['search_term'])){

      //       //  then let's search it in the DB

      //       //  then get it from the URL
      //   $term = $_GET['search_term'];
       
      //       // then formulate th DB query using the search
      //   $query = "SELECT *
      //   FROM `games`
      //   WHERE `name` LIKE ?
      //   ";

      //       // execute the query

      //       // get the results 
      //   $results = DB::select($query, ['%'.$term.'%']);

      //       // return the results as json
      //   header('Content-type: application/json');
      //   echo json_encode($results);

      //       }
      //       // then let's use it to search within the DB
      //       // otherwise
      //   else {
      //       // don't do a search at all
      //       // TODO: figure out a good response
      //   echo 'You need a search term';
      //   }

