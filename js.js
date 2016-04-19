function calcul(a,b){
	var x = document.getElementById(a).value;
	x = parseInt(x);
	var y = document.getElementById(b).value;
	y = parseInt(y);
	var r = x + y;
	document.getElementById('Resultat').innerHTML = r;
}
