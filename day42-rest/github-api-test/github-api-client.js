function load_data_from_github() {

    fetch('https://api.github.com/users/codingbootcamppraha/repos', {
        method: 'GET'
    }).then(r => r.json())
    .then(data => {

        console.log(data);

    })

}


function load_data_from_local_cached_file() {

    fetch('response.json', {
        method: 'GET'
    }).then(r => r.json())
    .then(data => {

        console.log(data);

    })

}