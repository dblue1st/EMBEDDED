const char MAIN_page[] PROGMEM = R"=====(
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        Nhiệt độ: <span class="nhietdo" id="nhietdos">0</span> độ C <br/> Độ ẩm: <span class="doam" id="doams">0</span> % <br/>
    </div>
</body>
<script>
    setInterval(function() {
        getnhietdo();
        getdoam();
    }, 1000);

    function getnhietdo() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("nhietdos").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "docnhietdo", true);
        xhttp.send();
    }

    function getdoam() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("doams").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "docdoam", true);
        xhttp.send();
    }
</script>

</html>
)=====";