<!DOCTYPE html>
<html>
<head>
    <title>Profil Pengguna - POS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            color: #666;
            margin-bottom: 10px;
        }
        .user-info {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .user-info p {
            margin-bottom: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profil Pengguna</h1>
        <div class="user-info">
            <p>ID Pengguna: {{ $id }}</p>
            <p>Nama Pengguna: {{ $name }}</p>
        </div>
    </div>
</body>
</html>
