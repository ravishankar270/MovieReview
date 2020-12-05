<table>
    <tr>
    <th>First name</th>
    <th>Last name</th>
    <th>Job title</th>
    </tr>
 
    <tbody id="data"></tbody>
</table>

<script>
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
 
    html += "<tr>";
        html += "<td>" + question + "</td>";
    html += "</tr>";
}

    document.getElementById("data").innerhtml = html;
    }
}

</script>

<!-- <table>
    <tr>
    <th>First name</th>
    <th>Last name</th>
    <th>Job title</th>
    </tr>
 
    <tbody id="data"></tbody>
</table>
 
<script>
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "index.php", true);
    ajax.send();
 
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);
 
            var html = "";
            for(var a = 0; a < data.length; a++) {
                var firstName = data[a].question;
                var lastName = data[a].option1;
                var jobTitle = data[a].jobTitle;
 
                html += "<tr>";
                    html += "<td>" + firstName + "</td>";
                    html += "<td>" + lastName + "</td>";
                    html += "<td>" + jobTitle + "</td>";
                html += "</tr>";
            }
            document.getElementById("data").innerHTML += html;
        }
    };
</script> -->