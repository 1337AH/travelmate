function addDestination(){
    var count = document.getElementsByClassName("form-control dest");
    if( count.length != 3){
        var container = document.getElementById("planner-form");
        var input = document.createElement("input");
        input.type = "text";
        input.name = "destiantion" + (count.length +1);
        input.placeholder = "Destination #" + (count.length +1) ;
        input.classList.add("form-control");
        input.classList.add("dest");
        input.classList.add("data-json");
        container.appendChild(input);
        $(".data-json").easyAutocomplete(options);
    }
}
var options = {
    url: "http://localhost:8000/api/v1/city/index",

    getValue: "name",

    list: {
        match: {
            enabled: true
        }
    }
};

$(".data-json").easyAutocomplete(options);
