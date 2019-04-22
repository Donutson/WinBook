let nom=document.forms['form'][0];
let prenom=document.forms['form'][1];
let ms=document.forms['form'][2];
let mw=document.forms['form'][3];
let envoi=document.forms['form'][5];
let errornom=document.getElementById('errornom');
let errorprenom=document.getElementById('errorprenom');
let errorms=document.getElementById('errorms');
let errormw=document.getElementById('errormw');
let error=document.getElementById('error');
let issuccess=true;
// gestion de l'erreur pour le nom
nom.addEventListener('blur',function(){
	let regex=/ /;
if(regex.test(nom.value)){
	errornom.textContent='Pas d\'espace';
	errornom.style.backgroundColor='red';
	issuccess=false;
}
else if(nom.value=='')
{
	errornom.textContent='Veuillez remplir ce champ';
	errornom.style.backgroundColor='red';
	issuccess=false;
}
else{
	errornom.textContent=' ';
	errornom.style.backgroundColor='rgba(0,0,0,0.0)';
	issuccess=true;
}
})
// gestion de l'erreur pour le prenom
prenom.addEventListener('blur',function(){
if(prenom.value=='')
{
	errorprenom.textContent='Veuillez remplir ce champ';
	errorprenom.style.backgroundColor='red';
	issuccess=false;
}
else{
	errorprenom.textContent=' ';
	errorprenom.style.backgroundColor='rgba(0,0,0,0.0)';
	issuccess=true;
}
})
// gestion de l'erreur pour le matricule scolaire
ms.addEventListener('blur',function(){
	let regex=/^CI2019[0-9]+$/;
if(ms.value=='')
{
	errorms.textContent='Veuillez remplir ce champ';
	errorms.style.backgroundColor='red';
	issuccess=false;
}
else if(!regex.test(ms.value)){
	errorms.textContent='format incorrect';
	errorms.style.backgroundColor='red';
	issuccess=false;
}
else{
	errorms.textContent=' ';
	errorms.style.backgroundColor='rgba(0,0,0,0.0)';
	issuccess=true;
}
})
// gestion de l'erreur pour le matricule win
mw.addEventListener('blur',function(){
	let regex=/^CI2019[0-9]+[a-zA-Z]+/;
if(mw.value=='')
{
	errormw.textContent='Veuillez remplir ce champ';
	errormw.style.backgroundColor='red'
	issuccess=false;
}
else if(!regex.test(mw.value)){
	errormw.textContent='format incorrect';
	errormw.style.backgroundColor='red';
	issuccess=false;
}
else{
	errormw.textContent=' ';
	errormw.style.backgroundColor='rgba(0,0,0,0.0)';
	issuccess=true;
}
})
envoi.addEventListener('click',function(e){
	if(!issuccess){
		e.preventDefault();
		error.textContent='Assurez-vous que tous les champs sont bien remplir et valide';
		error.style.backgroundColor='red';
	}
	else{
		error.textContent=' ';
		error.style.backgroundColor='rgba(0,0,0,0.0)';
	}
})