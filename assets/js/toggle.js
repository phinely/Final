
$(document).ready(function(){
   let focus = document.querySelector(".Rb");

   focus.addEventListener("mouseover",function(){
    this.classList.toggle("on");
   })
   focus.addEventListener("click",function(){
      this.classList.toggle("on");
     })

})



