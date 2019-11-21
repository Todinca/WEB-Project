/*
const hero = document.querySelector('.hero');
const slider = document.querySelector('.slider');
const logo = document.querySelector('#logo');
const headline= document.querySelector('.headline');

const tl = new TimelineMax();

tl.fromTo(hero,1,{height: "0%"},{height: '80%'});



// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
*/
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

function myFunction() {
    document.getElementById("MyDropUp").classList.toggle("show");
    var dropups = document.getElementsByClassName("dropup-content");
      var i;
      for (i = 0; i < dropups.length; i++) {
        var openDropup = dropups[i];
        openDropup.style.display="block";
  }
}


 /*
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) 
    {
        if (!event.target.matches('.dropup-btn')) 
        {
          var dropups = document.getElementsByClassName("dropup-content");
          var i;
          for (i = 0; i < dropups.length; i++) {
            var openDropup = dropups[i];
            if (openDropup.classList.contains('show')) {
              openDropup.classList.remove('show');
            }
          }
        }
    }
*/


function showPopUp(x)
{
  if(x==1){
      document.getElementById("LoginPopUp").style.display="block";
      document.getElementById("InregistrarePopUp").style.display="none";
      document.getElementById("ContactPopUp").style.display="none";
      document.getElementById("CosPopUp").style.display="none";
  }else if(x==2){
      document.getElementById("LoginPopUp").style.display="none";
      document.getElementById("InregistrarePopUp").style.display="block";
      document.getElementById("ContactPopUp").style.display="none";
      document.getElementById("CosPopUp").style.display="none";
  }else if(x==3){
    document.getElementById("LoginPopUp").style.display="none";
    document.getElementById("InregistrarePopUp").style.display="none";
    document.getElementById("ContactPopUp").style.display="block";
    document.getElementById("CosPopUp").style.display="none";
  }else{
    document.getElementById("CosPopUp").style.display="block";
  }  
}


function closePopUP(x){
  if(x==1)
     document.getElementById("LoginPopUp").style.display="none";
  else if(x==2)
     document.getElementById("InregistrarePopUp").style.display="none";
  else if(x==3){
    document.getElementById("ContactPopUp").style.display="none";
  }else{
    document.getElementById("CosPopUp").style.display="none";
  }
 }

 function cumpara(idProdus)
 {
// Simulate an HTTP redirect:
window.open("cos.php?produs="+idProdus, '_blank');
 }

 function deteteProdus(id,pret)
 {
  var text=document.getElementsByClassName("itemCos");
  var cnt=0;
  for (i = 0; i < text.length; i++) {
    if(text[i].style.display!="none"){
      cnt++;
    }  
  }
  if(cnt==0)
  {
    document.getElementById("emptyCos").style.display="block";
    document.getElementById("emptyCos").innerHTML="Cosul este gol!";
  }

  document.getElementById("idItem"+id).style.display="none";

  var valPret=document.getElementById("PretTotalComanda").textContent;
  fpret=parseInt(valPret)-pret;
  document.getElementById("PretTotalComanda").innerHTML=fpret;
 }