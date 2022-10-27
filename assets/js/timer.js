let getidtime = document.getElementById("timer");
let getwaktu = getidtime.getAttribute("data-time");
let getisi = getidtime.getAttribute("data-isi");
let countDownDate = new Date(getwaktu).getTime();
let x = setInterval(function(){

	let now = new Date().getTime();
	let dis = countDownDate - now;
	let days = Math.floor(dis / (1000 * 60 * 60 * 24));
	let hours = Math.floor( (dis % (1000 * 60 * 60 * 24 )) / (1000 * 60 * 60));
	let minutes = Math.floor( (dis % (1000*60*60)) / (1000*60) );
	let seconds = Math.floor( (dis % (1000*60)) / 1000 );
	document.getElementById("timer").innerHTML = 
	"<span class='h1 font-weight-bold'>" + days  + "</span>Hari" +
	"<span class='h1 font-weight-bold'>" + hours  + "</span>Jam" +
	"<span class='h1 font-weight-bold'>" + minutes  + "</span>Menit" +
	"<span class='h1 font-weight-bold'>" + seconds  + "</span>Detik"; 
	//days + " hari " + hours + " jam " + minutes + " menit " + seconds + " Detik "

	if (dis < 0) {
		clearInterval(x);
		document.getElementById("timer").innerHTML =  'Loading...';
	setTimeout(function() {
		location.reload();
	}, dis);
	}

	
}, 1000);