<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP AJAX</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <style>
        .text-bold{
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <h3>Search Users</h3>
        <form action="" class="mt-3">
            <input type="text" name="" id="" class="form-control" onkeyup="show_suggestions(this.value)">
            <p class="mt-1">Suggestions: <span id="output" class="text-bold"></span></p>
        </form>
    </div>
    <script>
    function show_suggestions(str){
        if(str.length == 0){
            document.getElementById('output').innerHTML = '';
        }else{
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("output").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "suggestions.php?q=" + str, true);
            xhttp.send();
        }
    }
    </script>
</body>
</html>