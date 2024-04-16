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
        <h1>Contact Us</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h2>Get in Touch</h2>
        <p>If you have any questions, feedback, or inquiries, please feel free to contact us using the form below:</p>
        <form method="post" action="contact_process.php">
            <div>
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">Your Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" name="submit">Send Message</button>
        </form>
    </section>
    <footer>
        <p>&copy; 2024 Amanzimtoti.com. All rights reserved.</p>
    </footer>
</body>
</html>
