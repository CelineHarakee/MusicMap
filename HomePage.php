<!DOCTYPE html>
<html>
  <head>
        <title> Music Map </title>
        <link rel = "stylesheet" type = "text/css" href = "HomePage.css">
        <!-- font -->
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> 
        <!-- icon -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- slider -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- footer -->
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  </head>

  <body>
   
    <header>
    <a href="HomePage.php">
    <img src="logo3.png" alt="Logo" style="width: 130px; height: 100px; margin-left: -30px; ">
    </a>        
        <ul>
            <li><a href="HomePage.php" class="active">Home</a></li>
            <li><a href="MapPage.php">Map</a></li>
            <li><a href="QuizPage.html">Trivia Quizzes</a></li>
        </ul>
    </header>
        
    <section>
      <img src = "globe.png" id = "globe">
      <img src = "headphones.png" id = "headphones">
      <img src = "instruments.png" id = "instruments">

      <h2 id = "text">Music Map</h2>
    </section>

<!-- cards -->
    <div class="container_cards">
        <div class="row">
    
            <div class="col-md-6 mb-3">
                <div class="card text-center p-1" style="width: 27rem; height: 25rem; color: #105530;  ">
                    <div class="card-body">
                        <img src="description.png" id = "card_img">
                        <h5 class="card-title"><strong style = "">Description</strong> </h5>
                        <p class="card-text">Music Map is a unique and engaging website that features an interactive world map, allowing users to explore the world's diverse music scenes. With just a simple click on any country, you can uncover the top artists and listen to the hottest songs from that specific region.</p>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6 mb-3">
                <div class="card text-center p-1" style="width: 27rem; height: 25rem; color: #105530;">
                    <div class="card-body">
                        <img src="aboutus.png" id = "card_img">
                        <h5 class="card-title"> <strong style = "">About Us</strong> </h5>
                        <p class="card-text">We are a passionate team of individuals who share a common love for music and a deep appreciation for the world's diverse musical cultures. Our mission is to bring the global music scene closer to you, one click at a time.</p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
       
<!-- stats -->
    <h1 class = "title"> By the Numbers</h1>
    <div style="min-height: 0em;"></div>
    <div class="counters" style="background-color: transparent;">
        <div>
            <div class = "counter">
                <h1><span data-count = "132">0</span></h1>
                <h3>Countries Explored</h3>
                </div>
            <div class="counter">
                <h1><span data-count = "396">0</span></h1>
                <h3>Songs in Our Library</h3>
                </div>
            <div class="counter">
                <h1><span data-count = "396">0</span></h1>
                <h3>Talented Artists</h3>
                </div>
            <div class = "counter">
                <h1><span data-count = "12">0</span></h1>
                <h3>Trivia Quizzes</h3>
                </div>
            </div>
        </div>

    <div style = "min-height: 20em;"></div>

<!-- sliding albums -->
    <h1 class = "titleS">Albums Trending Right Now!</h1>
      <div class = "slider-body">
      <div class= "image-slider">
        <div class="image-slider-track">
          <div class="slide">
            <img src="golden.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="layover.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album1.jpg" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album2.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album3.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album4.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album5.jpg" height="180" width="180"/> 
          </div>
          <div class="slide">
            <img src="album6.jpeg" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album7.jpeg" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album8.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album9.jpg" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album10.jpg" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album11.jpg.webp" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album12.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album13.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album14.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album15.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album16.jpeg" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album17.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album18.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album19.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album20.png" height="180" width="180"/>
          </div>
          <div class="slide">
            <img src="album21.png" height="180" width="180"/>
          </div>
        </div>
      </div>
    </div>

<!--footer , contact us -->
    <footer class = "contact">
        <div class = "container">
          <div class="contact-wrapper">
            <div class = "contact-info">
                <h3>Contact Information</h3>
                    <p><i class = "fas fa-phone"></i>058 058 3048</p>
                    <p><i class = "fas fa-envelope"></i>musicmap@gmail.com</p>
                    <p><i class = "fas fa-map-marker-alt"></i>Jeddah, Saudi Arabia</p>
                    <h3><br /> Follow Us</h3>   
                      <div class = "s4">
                          <a href="https://instagram.com/celineharakee?igshid=YTQwZjQ0NmI0OA%3D%3D&utm_source=qr" class="iconbtn fa-brands fa-instagram"></a>
                          <a href="#" class="iconbtn fa-brands fa-linkedin"></a>
                          <a href="#" class="iconbtn fa-brands fa-linkedin"></a>
                          <a href="https://open.spotify.com/user/ekkgcd07b74zs0uti4wx8uukf?si=73296aff96b44dd9" class="iconbtn fa-brands fa-spotify"></a>
                      </div>
                    </div>

<!--footer , login -->
                    <div class = "contact-form">
                        <h3> Special Users Only</h3>
                        <p class = "logindb"> Log in to access database </p>
                        <form method = "POST" action='user.php' autocomplete = "off">
                        <?php
                            if (!empty($_GET['error'])) {
                                echo '<div class="alert alert-danger alert" role="alert">' . htmlspecialchars($_GET['error']) . '</div>';
                            }
                        ?>
                    <div class = "form-group">
                      <label for="username" class="form-label">Username</label>
                        <input type = "text" name = "username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class = "form-group">
                      <label for="password" class="form-label">Password</label>
                        <input type = "password" name = "password" class="form-control" id="exampleInputPassword1">
                    </div>

                          <button type = "submit" style = "border-radius: 20px;">Log in</button>
                        </form>
                      </div>
                  </div>
              </div>
    </footer>


        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script src = "parallaxScrolling.js"></script> 
        <script src = "statistics.js"></script>
  </body>
</html>