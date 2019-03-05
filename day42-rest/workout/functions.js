const initialize_actors = () => {

    // initialize the navigation
    let links = document.querySelectorAll('nav a');
    links.forEach((link) => {

        link.addEventListener('click', (event) => {

            event.preventDefault(); // prevent the default behaviour of clicking a link

            let id = link.getAttribute('data-id'); // get the value of the data-id attribute of THIS link
            load_complete_actor(id); // use the id to load the appropriate actor

        })

    })
    
}

let things_that_are_loading = 0;

const load_complete_actor = (actor_id) => {

    // show the loader
    document.querySelector('.loader').classList.remove('hidden');

    load_actor(actor_id);

    load_ratings(actor_id);

    load_genres(actor_id);

    
}

const load_actor = (actor_id) => {

    things_that_are_loading++;

    fetch(`https://classes.codingbootcamp.cz/assets/classes/workouts/actor-o-matic/actor/${actor_id}`, {
        method: 'GET'
    })
    .then(response => response.json()) // parses the JSON response
    .then(data => {

        things_that_are_loading--;
        if (!things_that_are_loading) {
            // hide the loader
            document.querySelector('.loader').classList.add('hidden');
        }

        let h1 = document.querySelector('h1.name'); // get the element
        h1.innerHTML = data.name; // change the element's inner HTML

        document.querySelector('.movies-total .data').innerHTML = data.movies_total; // the same in 1 line

    });

}

function load_ratings(actor_id) {

    things_that_are_loading++;

    fetch(`https://classes.codingbootcamp.cz/assets/classes/workouts/actor-o-matic/actor/${actor_id}/ratings`, {
        method: 'GET'
    })
    .then(response => response.json()) // parses the JSON response
    .then(data => {

        things_that_are_loading--;
        if (!things_that_are_loading) {
            // hide the loader
            document.querySelector('.loader').classList.add('hidden');
        }

        lineChart('ratings-data', data);

    });

}


function load_genres(actor_id) {

    things_that_are_loading++;

    fetch(`https://classes.codingbootcamp.cz/assets/classes/workouts/actor-o-matic/actor/${actor_id}/genres`, {
        method: 'GET'
    })
    .then(response => response.json()) // parses the JSON response
    .then(data => {

        things_that_are_loading--;
        if (!things_that_are_loading) {
            // hide the loader
            document.querySelector('.loader').classList.add('hidden');
        }

        pieChart('genres-data', data);

    });

}
