// In the JavaScript file declare a function load_movies. Attach an event listener on the button so that when it is clicked, the function will be called.

// In the function load_movies run an AJAX request (using fetch) that will go to the API endpoint you created before.

// Use the response (you have to first parse it as JSON) to create list items <li> containing the movie names within the unordered list.

// In the end it should work like this:

// User arrives to a seemingly empty page containing just a button
// User clicks the button
// Within (mili)seconds, the list is populated with 10 movie names

const load_movies = () => {
  fetch('http://www.cbp-exercises.test:8080/Day26/movie_names.php')
    .then(response => response.json())
    .then(data => {
      console.log(data);
      let list = document.querySelector('#list');
      data.forEach(item => {
        let li = document.createElement('li');
        li.innerHTML = item;
        list.appendChild(li);
      })
    })
}

document.querySelector("#btn").addEventListener('click', event => {
  load_movies()
});