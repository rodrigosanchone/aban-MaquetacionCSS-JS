const iconoMenu= document.querySelector('.movil-menu');
iconoMenu.addEventListener('click',navegacionResponsive)

const enlances= document.querySelectorAll('.navegacion A');




for(var i=0; i<=enlances.length; i++){
    enlances[i].addEventListener('click', ocultar);
}



function navegacionResponsive(){
  
   const navegacion= document.querySelector(".navegacion");
   navegacion.classList.toggle("set")

 
  
 }

 function ocultar(){
 // alert('ocultar');
 const navegacion= document.querySelector(".navegacion");
  navegacion.classList.remove("set")
}


