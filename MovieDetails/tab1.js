var stars1=document.querySelectorAll(".stars1 .star1");

function rate1(index){
    for(i=0; i<=index;i++){
        stars1[i].style.opacity=1;
        stars1[i].style.color="#FFDF00";

        
    }
    for (i=index+1; i<=4;i++){
        stars1[i].style.opacity=0.2;
        stars1[i].style.color="";

    }
    document.getElementById('starz').value=index+1;
    console.log(document.getElementById('starz').value)
}