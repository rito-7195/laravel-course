<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/todo/create">Add To Do</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Activity</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($todo as $todos => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->activity }}</td>
            <td>{{ $value->description }}</td>
            <td>
                <a href="/todo/{{ $value->id }}/edit"><button>Edit</button></a>
                <form action="/todo/{{ $value->id }}" method="POST">
                @csrf    
                    {{ method_field('DELETE') }}
                    <input type="submit" name="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>