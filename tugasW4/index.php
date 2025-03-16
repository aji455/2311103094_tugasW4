<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Usia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .container {
            max-width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        input, button {
            margin-top: 10px;
            padding: 8px;
            width: 100%;
        }
        .message {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cek Usia</h2>
        <form method="POST" action="proses.php">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
            
            <label for="umur">Umur:</label>
            <input type="number" name="umur" id="umur" required>
            
            <button type="submit">Cek</button>
        </form>

        <?php if (isset($_SESSION['status'])): ?>
            <p class="message"><?php echo $_SESSION['status']; ?></p>
            <?php unset($_SESSION['status']); ?>
        <?php endif; ?>
    </div>
</body>
</html>
