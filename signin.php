<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SLEEPTRACKER</title>
   <link rel="stylesheet" href="style.css">
   <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
</head>
<body>
   <header>
       <img src="assets/Logo.png" alt="Not Available">
       <a href="#" class="logo">SLEEPTRACKER</a>
       <ul>
           <li><a href="#">About Us</a></li>
       </ul>
   </header>
   <div class="container">
       <div class="card" id="card1">
           <h1>Plan your Sleep and Control your progress with us online</h1>
           <img src="assets/image1.jpg" alt="Not Available" id="logo2">
       </div>
       <div class="card" id="card2">
           <h1>Sign-UP</h1>
           <form class="form" action="registration.php" method="post">
               <div id="upperInput">
                   <label for="name" class="label">FULL NAME : </label>
                   <input type="text" placeholder="Enter your full name" name="name" id="name">
               </div>
               <div>
                   <label for="email" class="label">MAIL ADDRESS : </label>
                   <input type="email" name="email" id="email" placeholder="Enter your email">
               </div>
               <div>
                   <label for="pass" class="label">PASSWORD : </label>
                   <input type="password" name="password" id="pass" placeholder="Enter Password">
               </div>
               <button type="submit" id="btn-signUp" class="btn" onclick="login_signUp()">Sign-Up</button>
               <button type="submit" id="btn-Login" class="btn" onclick="signUP_login()">Login</button>
           </form>
       </div>
       <div class="card" id="card4">
           <img src="assets/image2.png" alt="Not Available" id="logo3">
       </div>
       <div class="card" id="card3">
           <h1>Why <span id="span1">SLEEPTRAKER</span>?</h1>
           <p>
               Sleep is an essential function1 that allows your body and mind to recharge, leaving you refreshed and alert when you wake up. Healthy sleep also helps the body remain healthy and stave off diseases. Without enough sleep, the brain cannot function properly. This can impair your abilities to concentrate, think clearly, and process memories.
           </p>
           <p>
               Most adults require between seven and nine hours3 of nightly sleep. Children and teenagers need substantially more sleep, particularly if they are younger than five years of age. Work schedules, day-to-day stressors, a disruptive bedroom environment, and medical conditions can all prevent us from receiving enough sleep. A healthy diet and positive lifestyle habits can help ensure an adequate amount of sleep each night – but for some, chronic lack of sleep may be the first sign of a sleep disorder.
           </p>
       </div>
   </div>
   <script src="scripts.js"></script>
</body>
</html>