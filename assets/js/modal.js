var modalC = document.getElementById("modalClassic");
var modalP = document.getElementById("modalPro");
var modal = document.querySelector('.modal');

// Get the button that opens the modal
var btnClassic = document.querySelector(".poruciclassic");
var btnPro = document.querySelector(".porucipro");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName('close')[1];

btnPro.addEventListener('click', () => {
	modalP.style.display = 'block';
});
btnClassic.addEventListener('click', () => {
	modalC.style.display = "block";
});
span1.addEventListener('click', () => {
	modalC.style.display = 'none';
});
span2.addEventListener('click', () => {
	modalP.style.display = 'none';
});
window.onclick = function (event) {
	if (event.target == modalC || event.target == modalP) {
		modalC.style.display = "none";
		modalP.style.display = "none";
	}
}


/* ==== POLITIKE PRIVATNOSTI NA STRANICAMA ==== */
var klikC = false;
var politikaSpanC = document.querySelector('#politikaprivC');
var politikaTextC = document.querySelector('#politikaC');
var politikaSpanP = document.querySelector('#politikaprivP');
var politikaTextP = document.querySelector('#politikaP');

politikaSpanC.addEventListener('click', () => {
	if (!klikC) {
		klikC = true;
		politikaTextC.style.display = 'block';
		return;
	}
	if (klikC) {
		klikC = false;
		politikaTextC.style.display = 'none';
		return;
	}
});
klikP = false;
politikaSpanP.addEventListener('click', () => {
	if (!klikP) {
		klikP = true;
		politikaTextP.style.display = 'block';
		return;
	}
	if (klikP) {
		klikP = false;
		politikaTextP.style.display = 'none';
		return;
	}
});

var checkboxC = document.querySelector('.modal form #checkC');
var checkboxP = document.querySelector('.modal form #checkP');
var buttonC = document.querySelector('.modal form #btnClassicPoruci');
var buttonP = document.querySelector('.modal form #btnProPoruci');

// Dodavanje event listener-a na promenu stanja checkbox-a
checkboxC.addEventListener('change', function () {
	if (checkboxC.checked) {
		// Omogućavanje dugmeta
		buttonC.disabled = false;
	} else {
		// Onemogućavanje dugmeta
		buttonC.disabled = true;
	}
	//(checkboxC.checked)?buttonC.disabled=true:buttonC.disabled=false;
});
checkboxP.addEventListener('change', function () {
	if (checkboxP.checked) {
		// Omogućavanje dugmeta
		buttonP.disabled = false;
	} else {
		// Onemogućavanje dugmeta
		buttonP.disabled = true;
	}
	//(checkboxP.checked)?buttonP.disabled=true:buttonP.disabled=false;
});

document.addEventListener('DOMContentLoaded', () => {
	if (checkboxC.checked) {
		// Omogućavanje dugmeta
		buttonC.disabled = false;
	} else {
		// Onemogućavanje dugmeta
		buttonC.disabled = true;
	}

	if (checkboxP.checked) {
		// Omogućavanje dugmeta
		buttonP.disabled = false;
	} else {
		// Onemogućavanje dugmeta
		buttonP.disabled = true;
	}
	/* (checkboxC.checked)?buttonC.disabled=true:buttonC.disabled=false;
	(checkboxP.checked)?buttonP.disabled=true:buttonP.disabled=false; */
});