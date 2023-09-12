<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.374/build/spline-viewer.js"></script> 
    <script>
    function digitalTime()
    {
        var d = new Date();
        var h = d.getHours();
        var m = d.getMinutes();
        var s = d.getSeconds();
        document.getElementById("client-date").innerHTML = (h+':'+m+':'+s);
        setTimeout(digitalTime,1000);
    }
    
</script>
    <title>Hisham's Portfolio</title>
</head>
<body onload="digitalTime()">
    
<!-- Header section -->
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

<!-- Section 1 -->
<section id="spline-section">
    
    <spline-viewer loading-anim url="https://prod.spline.design/2ATaqe9HFzto75QU/scene.splinecode"></spline-viewer>
    <div class="content">
        <h1>Hey there 👋</h1>
        <h1>I'm Hisham Moideen</h1>

    </div>
</section>

<!-- About Me -->
<section id="about-me">
    <div class="about-me-row">
        <div class="column">
            <h1>About Me</h1>
            <p>Hey there! I'm Hisham Moideen pursuing a degree in computer science engineering. Working for several websites including news agencies, businesses, portfolios etc. I have extensive experience in building WordPress websites for over 4 years now. I'm a philomath in technology and enthusiastic about exploring newer sides of it.</p>
        </div>
        <div class="column-pic">
            <img class="ai-pic" src="images/ai-pic.png" width="350px">
        </div>
    </div>
</section>

<!-- Qualification -->
<section class="centered-section" id="qualification">
    <h1>My Qualifications</h1>
    <img src="images/qualification.png" width="800px">
</section>

<!-- My works -->
<section class="works-section" id="works">
    <h1>My Works</h1>
    <div class="company-logos">
      <img class="company-logo" src="images/imt.png">    
      <img class="company-logo" src="images/channels4_profile.jpg">
      <img class="company-logo" src="images/dtv.jpg">
      <img class="company-logo" src="images/News-Bites_Logo_D-View-2-1.webp">
      <p>With over 4 years of experience in building WordPress websites,<br>I have successfully catered to a diverse clients,ranging from news agencies<br>to businesses and portfolios.</p>
    </div>
</section>

<!-- Hobbies -->

<section class="centered-section" id="qualification">
    <h1>My Hobbies</h1>
    <img src="images/hobbies.jpg" width="800px">
</section>


    
</section>
<section id="about-me">
    <div class="about-me-row">
        <div class="column">
        <h3>Current Time</h3>
        <p id="client-date"></p>
        <?php
        date_default_timezone_set("Asia/Kolkata");
        ?>
        </div>
        <div class="column-pic">
        <?php
        $count = file_get_contents("counter.txt");
        echo "<h3>Total visitor count:</h3>" . $count;
        file_put_contents("counter.txt",$count+1);
        ?>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>

    <p>Site built by Hisham Moideen</p>
</footer>

</body>
</html>