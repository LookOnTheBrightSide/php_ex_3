console.log("works")

var to_fill = document.getElementById('details_per_order');
var order_detail;
function show_order_details(id_num) {
    console.log('requesting data for ', id_num);
    var clicked = "id="+id_num;
    var url = "get_details.php";
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            order_detail = xmlhttp.responseText;
            to_fill.innerHTML = order_detail;
        }else{
        	to_fill.innerHTML = "<strong>Loading</strong>";
        }
    }
    xmlhttp.open("POST",url, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(clicked);
}
