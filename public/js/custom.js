function addDestination(){
    var count = document.getElementsByClassName("form-control dest");
    var container = document.getElementById("planner-form");
    var input = document.createElement("input");
    input.type = "text";
    input.name = "destiantion" + (count.length +1);
    input.placeholder = "Destination #" + (count.length +1) ;
    input.classList.add("form-control");
    input.classList.add("dest");
    container.appendChild(input);
}