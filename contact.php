<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Amanzimtoti.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Amanzimtoti.com</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="homePage.php">Home</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="aboutPage.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FAQ.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FAQ.php">Shopping Cart</a>
                    </li>
                </ul>

                <span class="navbar-text">
                    <button>
                        <a class="nav-link" href="">Login</a>
                    </button>
                    <button>
                        <a class="nav-link" href="Registration1">Register</a>
                    </button>
                </span>
                </div>
            </div>
        </nav>
    </header>
    <section class="container">
        <h2>Contact Us</h2><hr>
        <p>If you have any questions, feedback, or inquiries, please feel free to contact us using the form below:</p>
        <form method="post" action="contact_process.php">
            <div>
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div><br>
            <div>
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div><br>
            <div>
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" name="submit">Send Message</button><br>
        </form><br>
    </section>

    <footer style="background-color: cornflowerblue; color: white; width: 100%; min-height: 7vh; bottom: 0;">
        <p>&copy; 2024 Amanzimtoti.com. All rights reserved.</p>
    </footer>
</body>

<style>
    body{
        margin: 0;
        min-height: 100vh;
    }
   
</style>    
</html>
