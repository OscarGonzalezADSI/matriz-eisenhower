document.addEventListener("DOMContentLoaded",(event)=>{
	const notas = document.querySelector('#notas');
	const largoplazo = document.querySelector('#largoplazo');
	const medianoplazo = document.querySelector('#medianoplazo');
	const cortoplazo = document.querySelector('#cortoplazo');
	notas.addEventListener('change', (event) => {
		const submit = document.getElementById("submit");
		submit.click();
	});	
	largoplazo.addEventListener('change', (event) => {
		const submit = document.getElementById("submit");
		submit.click();
	});	
	medianoplazo.addEventListener('change', (event) => {
		const submit = document.getElementById("submit");
		submit.click();
	});	
	cortoplazo.addEventListener('change', (event) => {
		const submit = document.getElementById("submit");
		submit.click();
	});	
});