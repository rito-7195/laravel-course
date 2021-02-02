<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/todo" method="post">
        @csrf
        <label for="">Activity</label>
        <br>
        <input type="text" name="activity">
        <br>
        <label for="">Description</label>
        <br>
        <textarea name="description" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>