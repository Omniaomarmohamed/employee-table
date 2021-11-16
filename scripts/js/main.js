
  AOS.init();

// popUp

var lightboxcontainer = document.getElementById("lightboxcontainer");
var lightboxitem = document.getElementById("lightboxitem");
var closeIcon = document.getElementById("close");
var cb=Array.from(document.getElementsByClassName("c-b"));
var currentIndex = 0;

for(var i=0;i<cb.length;i++)
{
    cb[i].addEventListener("click" , openLightBox)
}

function openLightBox(eventInfo)
{    
    lightboxcontainer.style.display ="flex";
}
// closeIcon.addEventListener("click" , closeLightBox);
function closeLightBox()
{
    lightboxcontainer.style.display ="none";
}


