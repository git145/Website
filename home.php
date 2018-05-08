<!DOCTYPE html>

<html lang = "en">
   <head>
     <?php

       // Import custom functions
       require_once("functions.php");

       // Print the information for the head section
       printHead("Home", "");
     ?>

     <!-- Import JavaScript -->
     <script src="code/javascript/jquery-3.3.1.min.js"></script>
     <script src="code/javascript/jquery.lazy.min.js"></script>
     <script src="code/javascript/jquery.lazy.iframe.min.js"></script>
     <script src="code/javascript/scripts_home.js"></script>
   </head>

   <body>
     <?php

       // Print the header
       printHeader();

       // Print the HTML5 page
       print('<div id = "main">
                  <section id = "introduction">
                    <a class = "bar" href = "#" title = "Display the &quot;introduction&quot; panel">
                      <div class = "bar-background">
                        <span>
                          Introduction background
                        </span>
                      </div>

                      <h2>
                        Introduction
                      </h2>
                    </a>

                    <div class = "panel">
                        <p>
                          Welcome to my website. The website serves as my portfolio, and contains examples of work related to
                          personal, student, or professional projects I have completed. The links, or images, below can be used
                          to view further assets related to the projects. Included are examples of graphic illustration,
                          concept designs, games, 3D models, Arduino projects, and music. I will add to the site as I
                          produce more work. You are welcome to contact me with professional enquiries through LinkedIn,
                          Coroflot, Hiive, or by e-mail.

                          <a href = "mailto:richardkneale@hotmail.co.uk" target = "_top" title = "Email me">
                            My CV is available on request.
                          </a>
                        </p>
                    </div>
                  </section>

                  <section id = "biography">
                    <a class = "bar" href = "#" title = "Display the &quot;biography&quot; panel">
                      <div class = "bar-background">
                        <span>
                          Biography background
                        </span>
                      </div>

                      <h2>
                        Biography
                      </h2>
                    </a>

                    <div id = "biography-panel" class = "panel">
                      <img id = "me" class = "lazy" data-src = "images/icons/me.png" alt = "Image of me" title = "Me">

                      <h3>
                        Profile
                      </h3>

                      <p>
                        I am a hard-working and approachable individual. In my free time I like to complete self-directed learning
                        because I enjoy learning new skills, which I develop quickly. I can work both individually and in a team.
                        I enjoy encouraging others to make best use of their abilities. I have implemented and maintain a website.
                      </p>

                      <p>
                        I play many video games and develop my own in my free time. I am a keen graphic illustrator. I was a
                        member of art societies in both primary and secondary school. I have a love of music and taught myself to
                        play the electric guitar. I am interested in sports. I enjoy watching football and snooker, as well as professional wrestling.
                      </p>

                      <h3>
                          Key skills
                      </h3>

                      <ul>
                        <li>
                          Degrees in Computer Science (MSc) and Mechanical Engineering (MEng).
                        </li>

                        <li>
                          Programming in Arduino, C#, CSS, HTML5, Java, JavaScript, MATLAB, PHP, Python, RAPID and Sass.
                        </li>

                        <li>
                          Experience implementing an interface, in relation to user experience.
                        </li>

                        <li>
                          Knowledge of OWL, RDF, SPARQL, and XML in relation to the semantic web.
                        </li>

                        <li>
                          Knowledge of the model-view-controller architecture.
                        </li>

                        <li>
                          Experience of content management systems, including Drupal and WordPress.
                        </li>

                        <li>
                          Database design using the relational model, and implementation with MySQL.
                        </li>

                        <li>
                          Knowledge of Git.
                        </li>

                        <li>
                          Graphic illustration, using graphics editors including Fireworks, PaintTool SAI, and Photoshop.
                        </li>

                        <li>
                          Knowledge of Web Content Accessibility Guidelines.
                        </li>

                        <li>
                          Experience developing applications using Android Studio, Eclipse, Notepad++, and Unity.
                        </li>

                        <li>
                          Knowledge of continuous improvement, kanban, and test-driven development.
                        </li>

                        <li>
                          Experience programming for artificial intelligence.
                        </li>

                        <li>
                          Experience leading a design project.
                        </li>

                        <li>
                          Excellent mathematical ability and written English.
                        </li>
                      </ul>

                      <a href = "#biography-panel" title = "Return to the top of the &quot;biography&quot; section" class = "align-right">
                        top of section
                      </a>
                    </div>
                  </section>

                  <section id = "games">
                    <a class = "bar" href = "#" title = "Display the &quot;games&quot; panel">
                      <div class = "bar-background">
                        <span>
                          Games background
                        </span>
                      </div>

                      <h2>
                        Games
                      </h2>
                    </a>

                    <div id = "games-panel" class = "panel">
                      <h3>
                        Tip the crates
                      </h3>

                      <iframe data-src = "https://www.youtube.com/embed/BPvylKvan30" allowfullscreen class = "lazy"></iframe>

                      <a href = "https://play.google.com/store/apps/details?id=com.tipthecrate.tipthecrate" title = "A link to Tip the Crates">
                        Available from the Play Store
                      </a>

                      <p>
                        Tip the crates to reach the goal. Earn achievements and compete to be the best.
                      </p>

                      <p>
                        Includes continuous and timed game modes, as well as a practice game. The game also features screens describing how to play and support for leader boards.
                      </p>

                      <a href = "#games-panel" title = "Return to the top of the &quot;games&quot; section" class = "align-right">
                        top of section
                      </a>
                    </div>
                  </section>

                  <section id = "art">
                    <a class = "bar" href = "#" title = "Display the &quot;art&quot; panel">
                      <div class = "bar-background">
                        <span>
                          Art background
                        </span>
                      </div>

                      <h2>
                        Art
                      </h2>
                    </a>

                    <div id = "art-panel" class = "panel">
                      <h3>
                        Temples
                      </h3>');

      // Print the images from the temple folder
      printFolder('images/temples', 'art-panel');

      // Print the heading of the miscellaneous images
      print('<h3>
                  Miscellaneous
                </h3>');

      // Print the images from the miscellaneous folder
      printFolder('images/miscellaneous', 'art-panel');

      // Print the heading of the Tekken fan art images
      print('<h3>
                  Tekken Fan Art
                </h3>');

      // Print the images from the Tekken fan art folder
      printFolder('images/tekken', 'art-panel');

      // Print the heading of the Panic Attack 3D model images
      print('<h3>
                  Panic Attack 3D Model
                </h3>');

      // Print the images from the Panic Attack 3D model folder
      printFolder('images/panic_attack', 'art-panel');

      // Print the heading of the Mass Effect fan art images
      print('<h3>
                  Mass Effect Fan Art
                </h3>');

      // Print the images from the Mass Effect fan art folder
      printFolder('images/mass_effect', 'art-panel');

      // Print the heading of the concept images
      print('<h3>
                  Concepts
                </h3>');

      // Print the images from the concepts folder
      printFolder('images/concepts', 'art-panel');

      // Print the heading of the Resident Evil fan art images
      print('<h3>
                  Resident Evil Fan Art
                </h3>');

      // Print the images from the Resident Evil fan art folder
      printFolder('images/resident_evil', 'art-panel');

      // Print the heading of the toy images
      print('<h3>
                  Toys
                </h3>');

      // Print the images from the toys folder
      printFolder('images/toys', 'art-panel');

      // Print the heading of the hammer troll 3D model images
      print('<h3>
                  Hammer Troll 3D Model
                </h3>');
      
      // Print the images from the hammer troll 3D model folder
      printFolder('images/troll', 'art-panel');

      // Print the heading of the wrestling game concepts images
      print('<h3>
                  Wrestling Game Concepts
                </h3>');

      // Print the images from the wrestling game concepts folder
      printFolder('images/wrestling', 'art-panel');

      // Print the HTML5 page
      print('</div>
            </section>

            <section id = "arduino">
              <a class = "bar" href = "#" title = "Display the &quot;arduino&quot; panel">
                <div class = "bar-background">
                  <span>
                    Arduino background
                  </span>
                </div>

                <h2>
                  Arduino
                </h2>
              </a>

              <div id = "arduino-panel" class = "panel">
                <h3>
                  Traffic lights
                </h3>

                <iframe data-src = "https://www.youtube.com/embed/pm6Rjz3vErU" allowfullscreen class = "lazy" title = "An Arduino traffic light system"></iframe>

                <a href = "code/arduino/traffic_lights.ino" download class = "align-center" title = "A link to the code for the Arduino traffic light system">
                   Download the code
                </a>

                <img data-src = "images/arduino/001Traffic_Lights.png" alt = "Arduino traffic lights diagram" class = "lazy" title = "Arduino traffic lights diagram">
                
                <a href = "#arduino-panel" title = "Return to the top of the &quot;Arduino&quot; section" class = "align-right">
                  top of section
                </a>
              </div>
            </section>

            <section id = "music">
              <a class = "bar" href = "#" title = "Display the &quot;music&quot; panel">
                <div class = "bar-background">
                  <span>
                    Music background
                  </span>
                </div>

                <h2>
                  Music
                </h2>
              </a>

              <div id = "music-panel" class = "panel">
                <iframe data-src = "https://www.youtube.com/embed/Qd9P51-aWJk" allowfullscreen class = "lazy" title = "The video for &quot;Daydream&quot;"></iframe>

                <p class = "align-center-paragraph">
                  Daydream (<a href = "music/daydream.mp3" download title="Link to download the mp3">download the mp3</a>)
                </p>

                <iframe data-src = "https://www.youtube.com/embed/fhG2QQ0aAac" allowfullscreen class = "lazy" title = "The video for &quot;Feel It&quot;"></iframe>

                <p class = "align-center-paragraph">
                  Feel It (<a href = "music/feel_it.mp3" download title = "Link to download the mp3">download the mp3</a>)
                </p>
                
                <a href = "#music-panel" title = "Return to the top of the &quot;music&quot; section" class = "align-right">
                  top of section
                </a>
              </div>
            </section>

            <section id = "other-projects">
              <a class = "bar" href = "#" title = "Display the &quot;other projects&quot; panel">
                <div class = "bar-background">
                  <span>
                    Other projects background
                  </span>
                </div>

                <h2>
                  Other projects
                </h2>
              </a>

              <div id = "other-projects-panel" class = "panel">
                <h3>
                  Heated cutlery project
                </h3>

                <p>
                  Completed as part of a product design and enterprise module at university.
                </p>');

       // Print the images from the cutlerease folder
       printFolder('images/cutlerease', 'other-projects-panel');

       // Print the HTML5 page
       print('</div>
                  </section>
                </div>');

       // Print the footer
       printFooter();
     ?>
   </body>
</html>