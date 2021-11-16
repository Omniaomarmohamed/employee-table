AOS.init();
//btnup
let speakersOffset = $("#speakers").offset().top;

$(window).scroll(function()
{
    let wScroll = $(window).scrollTop();
    if ( wScroll > speakersOffset - 20)
    {
        $("#main-nav").css("backgroundColor" , "rgba(0,0,0,0.5)");
        $("#btnUp").fadeIn(500);
    }
    else
    {
        $("#main-nav").css("backgroundColor" ,"transparent");
        $("#btnUp").fadeOut(500);
    }
});

$("#btnUp").click(()=>{
    $("html,body").animate({scrollTop:'0'} ,2000 )
});
// pop up

var imgs = Array.from( document.getElementsByClassName("img-item"));
var lightboxcontainer = document.getElementById("lightboxcontainer");
var lightboxitem = document.getElementById("lightboxitem");
var iconClose = document.getElementById("iconclose");
var aboutImage = document.getElementById("aboutimage");
var currentIndex = 0;

for(var i=0;i<imgs.length;i++)
{
    imgs[i].addEventListener("click" ,openLightBox)
}
function openLightBox(eventInfo)
{    

     currentIndex = imgs.indexOf(eventInfo.target);//0-5
     console.log(currentIndex);//0

    lightboxcontainer.style.display ="flex";
    var imgSrc = eventInfo.target.src;//image path ely elmosta5dm 3ml 3liha click
    aboutImage.style.backgroundImage = `url(${imgSrc})`;
}




// closeIcon.addEventListener("click" , closeLightBox);

function closeLightBox()
{
    lightboxcontainer.style.display ="none";
}

 










