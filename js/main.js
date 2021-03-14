var login, home, registro, perfil;
var secciones = [];

window.onload = () => {
	crearReferencias();
	agregarEventos();
	setTimeout(()=>{irA(login)},0);
	
}

function crearReferencias(){
	login = document.getElementById("form-login");
	home = document.getElementById("form-main");
	registro = document.getElementById("form-sign-up");
	perfil = document.getElementById("form-perfil");
	secciones = [login,home,registro,perfil];

	//Botones

	btn_ingresar 	= document.getElementById("btn_Ingresar");
	btn_registro 	= document.getElementById("btn_Registro");
	btn_registrarse = document.getElementById("btn_Registrarse");		
	btn_atrasR		= document.getElementById("btn_AtrasR");
	btn_atrasH		= document.getElementById("btn_AtrasH");
	btn_atrasP		= document.getElementById("btn_AtrasP");
	btn_perfil 		= document.getElementById("btn_Perfil");
}

function agregarEventos(){
	btn_ingresar.addEventListener("click", () => {
        irA(home);});

	btn_registro.addEventListener("click", () => {
        irA(registro);});

	btn_registrarse.addEventListener("click", () => {
        irA(home);});	

	btn_atrasR.addEventListener("click", () => {
        irA(login);});

	btn_atrasH.addEventListener("click", () => {
        irA(login);});

	btn_atrasP.addEventListener("click", () => {
        irA(home);});	

	btn_perfil.addEventListener("click", () => {
        irA(perfil);});

}

function ocultarSecciones(){
	for(i in secciones){
		secciones[i].style.display = 'none';
	}
}

function irA(seccion){
	ocultarSecciones();
	seccion.style.display = 'block';
}
