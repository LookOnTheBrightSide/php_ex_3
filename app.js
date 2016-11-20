console.log("works")
function fill_modal(clicked_item) {
		console.log(clicked_item);
		var ord_n = document.getElementById('ord_number');
		var ord_d = document.getElementById('ord_date');
		var ord_s = document.getElementById('ord_status');
		var ord_s_d = document.getElementById('ord_ship_date');
		var ord_r_d = document.getElementById('ord_req_date');
		var ord_c_n = document.getElementById('ord_cust_number');
		var ord_c = document.getElementById('ord_comments');

		ord_n.innerHTML = document.getElementById(clicked_item).getAttribute('data-orderNumber');
		ord_d.innerHTML = document.getElementById(clicked_item).getAttribute('data-orderDate');
		ord_s.innerHTML = document.getElementById(clicked_item).getAttribute('data-status');
		ord_s_d.innerHTML = document.getElementById(clicked_item).getAttribute('data-shippedDate') || "Not shipped yet";
		ord_r_d.innerHTML = document.getElementById(clicked_item).getAttribute('data-requiredDate');
		ord_c_n.innerHTML = document.getElementById(clicked_item).getAttribute('data-customerNumber');
		ord_c.innerHTML = document.getElementById(clicked_item).getAttribute('data-comments') || "No comment";
}
