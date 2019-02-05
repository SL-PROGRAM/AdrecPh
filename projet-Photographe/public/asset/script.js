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