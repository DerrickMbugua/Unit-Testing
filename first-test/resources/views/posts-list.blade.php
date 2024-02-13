<!DOCTYPE html>
<html>
<head>
    <title>Posts Page</title>
</head>
<body>

    <h1>Posts</h1>

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post['name'] }}</h2>
            <p>{{ $post['content'] }}</p>
            <!-- Add other fields as needed -->
        </div>
        <hr>
    @endforeach

</body>
</html>