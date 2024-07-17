let myIndex = 0;
carousel();

function carousel(){
   let mySlide = document.getElementsByClassName('mySlide');
   let dots = document.getElementsByClassName('dots');
   let i;

   for(i = 0; i < mySlide.length; i++){
        mySlide[i].style.display = 'none';
   }

   myIndex++;
   if(myIndex > mySlide.length){
        myIndex = 1;
   }

   for(i = 0; i < dots.length; i++){
    dots[i].className = dots[i].className.replace(' active', '');
   }

   mySlide[myIndex - 1].style.display = 'block';
   dots[myIndex - 1].className += ' active';
   setTimeout(carousel, 2000);
}