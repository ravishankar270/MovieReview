
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "question.php", true);
    ajax.send();

    ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText)
        console.log(data);
       
        var html = "";
        for(var a = 0; a < data.length; a++) {
        var question = data[a].question;
        var option1 = data[a].option1;
        var option2 = data[a].option2

        ;
        // document.write(option1);
        // document.write(option2);
        }
    }
}

        const quiz = [
    {
        q: "document.write(question)",
        options:["document.write(option1)","document.write(option2)",'Sedrick Gaylord','Bruce Willis'],
        answer:0
    },
    {
        q: 'Why does everyone begin to notice Joker?',
        options:['He dies','He kills Batmans parents','He started a stir with 3 people on a train','He destroyed Arkham Asylum'],
        answer:2
    },
    {
        q: 'Where does Joker live?',
        options:['The moon','Gotham City','Arkham City','Florida'],
        answer:1
    }
]
    
        



