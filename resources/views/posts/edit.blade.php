<!-- resources/views/posts/edit.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"], textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        button {
            background-color:rgb(21, 102, 222);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color:rgb(38, 62, 203);
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color:rgb(12, 43, 136);
            text-decoration: none;
            font-size: 16px;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <label for="title">Judul:</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}" required>
            
            <label for="content">Konten:</label>
            <textarea name="content" id="content" required>{{ $post->content }}</textarea>
            
            <button type="submit">Update</button>
        </form>
        
        <div class="back-link">
            <a href="{{ route('posts.index') }}">Kembali ke Daftar Post</a>
        </div>
    </div>
</body>
</html>
