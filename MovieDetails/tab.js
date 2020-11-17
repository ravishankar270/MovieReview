var tabButtons=document.querySelectorAll(".tabContainer .buttonContainer button");
var tabPanels=document.querySelectorAll(".tabContainer  .tabPanel");

function showPanel(panelIndex,colorCode) {
    tabButtons.forEach(function(node){
        node.style.borderBottom="";
        node.style.color="";
    });
    tabButtons[panelIndex].style.borderBottom="2px solid"+colorCode;
    tabButtons[panelIndex].style.color=colorCode;
    
    tabPanels.forEach(function(node){
        node.style.display="none";
    });
    tabPanels[panelIndex].style.display="block";
}
showPanel(0,'#f44336');



