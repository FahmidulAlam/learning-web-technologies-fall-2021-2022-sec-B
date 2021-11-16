function ajax(){
	let Name = document.getElementById('name').value;
	let xhttp = new XMLHttpRequest();

	xhttp.open('GET', 'Search.php?name'+Name, true);
	xhttp.send();
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('Name').innerHTML = this.responseText;
		}
	}
}