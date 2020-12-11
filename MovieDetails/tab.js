var tabButtons=document.querySelectorAll(".tabContainer .buttonContainer button");
var tabPanels=document.querySelectorAll(".tabContainer  .tabPanel");
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
    for(i=0; i<=index;i++){
        stars[i].style.opacity=1;
        stars[i].style.color="#FFDF00";

        
    }
    for (i=index+1; i<=4;i++){
        stars[i].style.opacity=0.2;
        stars[i].style.color="";

    }
    document.getElementById('starz').value=index+1;
    console.log(document.getElementById('starz').value)
}



function toggle(){
        var trailer = document.querySelector('.trailer');
        // var trailer = document.querySelector('video');

        trailer.classList.toggle('active')
    }