<?php

  // Prints the information for the head section
  function printHead($title, $additionalTags)
  {
    print('<meta charset = "utf-8">
              <meta name = "viewport" content="width = device-width, initial-scale = 1, maximum-scale = 1">
              <meta name = "author" content = "Richard Kneale">
              <meta name = "keywords" content = "Richard, Kneale, Portfolio, Games, Art, Arduino, Music' . $additionalTags . '">
              <title>
                RichardKneale.AlterVista.org - ' . $title . '
              </title>
              <meta name = "description" content = "Richard Kneale&apos;s Portfolio Website - ' . $title . '">
              <link rel = "apple-touch-icon" sizes="180x180" href = "/apple-touch-icon.png">
              <link rel = "shortcut icon" type = "image/png" sizes = "16x16" href = "/favicon-16x16.png">
              <link rel = "shortcut icon" type = "image/png" sizes = "32x32" href = "/favicon-32x32.png">
              <link rel = "manifest" href="/site.webmanifest">
              <link rel = "mask-icon" href="/safari-pinned-tab.svg" color = "#5bbad5">
              <meta name = "msapplication-TileColor" content = "#da532c">
              <meta name = "theme-color" content = "#ffffff">
              <link rel = "stylesheet" media = "all" href = "css/styles.css">');
  }

  // Prints the header
  function printHeader()
  {
    print('<header>
                <div class = "wrapper">
                  <h1>
                    RichardKneale.AlterVista.org
                  </h1>
                </div>
              </header>');
  }

  // Prints the footer
  function printFooter()
  {
      print('<footer>
                  <div class = "social-icons">
                    <div class = "wrapper">
                      <span>
                        Social icons
                      </span>

                      <a id = "linked-in" href = "https://www.linkedin.com/in/richardkneale" target = "_blank">
                        <span>
                          LinkedIn link
                        </span>
                      </a>

                      <a id = "coroflot" href = "http://www.coroflot.com/richardkneale/portfolio" target = "_blank">
                        <span>
                          Coroflot link
                        </span>
                      </a>

                      <a id = "hiive" href = "http://www.hiive.co.uk/richardkneale" target = "_blank">
                        <span>
                          Hiive link
                        </span>
                      </a>

                      <a id = "email" href = "mailto:richardkneale@hotmail.co.uk" target = "_top">
                        <span>
                          Email link
                        </span>
                      </a>
                    </div>
                  </div>

                  <div class = "copyright">
                    <div class = "wrapper">
                      <p>
                        &copy; Richard Kneale ' . date('Y') . '
                      </p>
                     </div>
                  </div>
              </footer>');
  }

  // Prints images from a folder
  function printFolder($directoryName, $panelID)
  {
      // Create an array of names of image files in the given directory
      $files = glob($directoryName . '/*.{jpg,png,gif}', GLOB_BRACE);

      // For each image
      foreach($files as $file)
      {
          /**
           * Prepare links to the full-size versions of images
           * The displayed name reqires the filetype and number to be removed
           */
          preg_match("/(?<=\d\d\d)(.*)(?=.(jpg|png|gif))/" , $file , $name);
          $imageName = str_replace("_", " ", $name[0]);

          // Print the slides
          print('<a href = "' . $file . '" target = "_blank">
                      <img data-src = "' . $file . '" class = "lazy" alt = "' . $imageName . '" title = "A link to the full-sized version of &quot;' . $imageName . '&quot;">
                    </a>

                    <a href = "' . $file . '" target = "_blank" class = "align-center" title = "A link to full-sized version of &quot;' . $imageName . '&quot;">
                      ' . $imageName . '
                    </a>');
      }
      
      // Print a link to return to the top of the given section
      print('<a href = "#' . $panelID . '" title = "Return to the top of the &quot;' . str_replace("-", " ", str_replace("-panel", "", $panelID)) . '&quot; section" class = "align-right">
                  top of section
                </a>');
  }
?>