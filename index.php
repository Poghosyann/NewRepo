<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>
</head>
<body>
<div>
    <input id="name" type="text" placeholder="Enter name">
    <button id="check">Check</button>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script>
    $('#check').click(function(){
       var name =  $('#name').val();
        $.ajax({
            type: 'post',
            url: 'names.php',
            data: {
                name: name
            },
            success:function(response){
                if(response === '1'){
                    alert('Name found')
                }
                else{
                    alert('Name not found')
                }
            }
        });
    });
</script>
</body>
</html>