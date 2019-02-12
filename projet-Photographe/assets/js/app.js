/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
$fullSize = document.querySelector("#fullSize");
$thumbnail = document.querySelector("#thumbnail")

function show($title){
    console.log($title)

    ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function(){ $fullSize.innerHTML = ajax.response
        $fullSize.style.display = 'block'}

    ajax.open("GET", "/fr/fullsize/?title="+ $title , true )
    ajax.send();

}

function hide(){
    $fullSize.innerHTML = "";
    $fullSize.style.display = "none";
}