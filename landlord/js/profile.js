div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: black;
    background-color: black;
    clear: left;
    text-align: center;
}


nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}




(function(){
	function getId() {
		var parameters = window.location.search.split('?')[1];
		var params = parameters.split('&');
		var id = null;
		for(var i = 0; i < params.length; i++) {
			if(params[i].split('=')[0] == "id") {
				id = params[i].split('=')[1];
			}
		}
		return parseInt(id)-1;
	}

	function init_data() {
		var id = getId();
		if(id != null) {
			document.body.querySelector('.image').src = data[id].src;
			document.getElementById('name').querySelector('h2').innerHTML = data[id].name;
			document.getElementById('price').innerHTML = data[id].price;
			document.getElementById('lease').innerHTML = data[id].lease;
			document.getElementById('amenities').innerHTML = data[id].amenities;

		}
	}
	init_data();

      window.location.href = "C://Users/cproc/Desktop/PG.2/push/www/index.html?id=" + id;
 
})();
