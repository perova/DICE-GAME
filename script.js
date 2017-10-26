cb_veg = document.getElementById("cb_veg");
cb_sriubos = document.getElementById('sriubos');
div_sriubos = document.getElementById('div_sriubos');
sriubu_sarasas = document.getElementById('sriubu_sarasas').options;

cb_nuts = document.getElementById('cb_nuts');
cb_gluten = document.getElementById('cb_gluten');

cb_veg.addEventListener("change", function() {
	if(cb_veg.checked) {
		// Pasalinti nevegetariskas sriubas
		for(var i = 0; i < sriubu_sarasas.length; i++) {		
			if(sriubu_sarasas[i].getAttribute("veg") == "false") {			
				if(sriubu_sarasas.selectedIndex == i) {
					alert("Jus turite pasirinke nevegetariska patiekala!");
				}
				sriubu_sarasas[i].style.display = 'none';
			} else {
				var selected = false;
				if(!selected) {
					sriubu_sarasas[i].setAttribute("selected", "true");
					selected = true;
				}
			}
		}
	} else {
		// grazinam visas sriubas
		for(var i = 0; i < sriubu_sarasas.length; i++) {
			sriubu_sarasas[i].style.display = 'block';
		}
	}
	// antri patiekalai
})

cb_sriubos.addEventListener("change", function(){
	if(cb_sriubos.checked) {
		// rodyti
		div_sriubos.style.display = 'block';
	} else {
		//slepti
		div_sriubos.style.display = 'none';
	}
})


cb_gluten = document.getElementById("cb_gluten");
cb_nuts = document.getElementById('cb_nuts');

ap_sarasas = document.getElementById("ap_sarasas").options;

cb_gluten.addEventListener("change", check_ap);
cb_nuts.addEventListener("change", check_ap);


function check_ap() {
		
	for (var i = ap_sarasas.length - 1; i >= 0; i--) {
		
		if(cb_gluten.checked && ap_sarasas[i].getAttribute("gluten") == "true" ) {
			ap_sarasas[i].style.display = 'block';
		} else if(){
			ap_sarasas[i].style.display = 'none';
		}
	};

}
 