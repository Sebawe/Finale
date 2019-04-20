<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>CREATE TIME</h1>

    <form method="POST" action = "/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title">
        </div>
        <div>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div><button type="submit">SUBMIT</button></div>
    </form>
</body>
</html>