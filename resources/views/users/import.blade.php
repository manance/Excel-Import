<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel Import</title>
</head>
<body>
    <div>
        <h1>Import your excel sheet here!</h1>
        <form action="/" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="file" name="file">
                <button type="submit">Import</button>
            </div>
        </form>
    </div>
</body>
</html>