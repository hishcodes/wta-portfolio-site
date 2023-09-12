<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.374/build/spline-viewer.js"></script> 
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <div class="hero">
        <nav>
        <h2 class="logo"><a href="index.php">Hisham</a></h2>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#qualification">Qualification</a></li>
            <li><a href="#works">My Works</a></li>
            <li><a href="#hobbies">Hobbies</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
    <section id="spline-section-contact">
        <spline-viewer loading-anim url="https://prod.spline.design/M6ekblZZB3qPrBPn/scene.splinecode"></spline-viewer>
        <div class="content">
            <h1 style="color: black;">Contact Me At</h1>
            <p style="text-decoration: none;">Email: <a style="text-decoration: none;" href="mailto:hishamkumbra@gmail.com">hishamkumbra@gmail.com</a></p>
            <div class="social-icons">
                <a href="https://in.linkedin.com/in/hisham-moideen903" target="_blank"><img src="images/linkedin.png" alt="LinkedIn"></a>
                <a href="https://www.instagram.com/hishcodes/" target="_blank"><img src="images/instagram.png" alt="Instagram"></a>
                <a href="https://github.com/hishcodes" target="_blank"><img src="images/github.png" alt="Github"></a>
              </div>

            <form method="POST" action="contact.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

                <input type="submit" value="Submit">
            </form>
        </div>
        <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create a new entry
    $entry = "Name: $name\nEmail: $email\nMessage: $message\n\n";

    // Append the entry to a file
    $file = 'submissions.txt';
    file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);

    // Provide a response or redirect back to the form page
    echo '<p>Thank you for your message!</p>';
  }
  ?>
    </section>


</body>
</html>