<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Amanzimtoti.com</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1 class="container">Register</h1>
        
    </header>
    <section class="container">
        <h2>Create an Account</h2>
        <form method="post" action="register_process.php">
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div><br>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div><br>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div><br>
            <button type="submit" name="register_btn">Register</button>
        </form>
    </section>
    
    <footer style="background-color: cornflowerblue; color: white; width: 100%; min-height: 7vh; bottom: 0;">
        <p>&copy; 2024 Amanzimtoti.com. All rights reserved.</p>
    </footer>
</body>
</html>
