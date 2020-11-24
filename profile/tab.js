var tabButtons=document.querySelectorAll(".right-side .nav ul li");
var tabPanels=document.querySelectorAll(".right-side  .tabPanel");
var stars=document.querySelectorAll(".stars .star");

function showPanel(panelIndex,colorCode) {
    tabButtons.forEach(function(node){
        node.style.backgroundColor="";
        node.style.color="";
    });
    tabButtons[panelIndex].style.backgroundColor=colorCode;
    tabButtons[panelIndex].style.color="white";
    
    tabPanels.forEach(function(node){
        node.style.display="none";
    });
    tabPanels[panelIndex].style.display="block";
}
showPanel(0,'#25aae1');

function rate(index){
    console.log(tabPanels)
    for(i=0; i<index;i++){
        stars[i].style.opacity=1;
        stars[i].style.color="#FFDF00";
        
    }
    for (i=index; i<=5;i++){
        stars[i].style.opacity=0.2;
        stars[i].style.color="";

    }
}



function toggle(){
        var trailer = document.querySelector('.trailer');
        // var trailer = document.querySelector('video');

        trailer.classList.toggle('active')
    }