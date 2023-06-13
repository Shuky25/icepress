var modalC = document.getElementById("modalClassic");
var modal = document.querySelector('.modal');

// Get the button that opens the modal
var btnClassic = document.querySelector(".poruciclassic");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

btnClassic.addEventListener('click', () => {
	modalC.style.display = "block";
});
span.addEventListener('click', () => {
	modal.style.display = 'none';
});
window.onclick = function (event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}