<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <label id='labelResult' name='labelResult'></label>

    <button id='btnResult' name='btnResult'></button>

    <script>
        
        btnResult = document.getElementById('btnResult');

        function postValues(){
            var xhr = new XMLHttpRequest();
            var eventID = 1
            var candidateID=1
            
            xhr.open('POST', 'engine.php');
            xhr.send();
        }

    </script>

</body>
</html>