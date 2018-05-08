/**
 * File: scripts_home.js
 * Author: Richard Kneale
 * Date created: 4th April 2018
 * Date modified: 10th April 2018
 * Description: Manages home.php
 */

// Global variables to hold all the bars and panels
var bars;
var panels;

// A global variable to represent the number of bars
var barsLength;

// After the page has loaded
window.onload = function() {
  
  // Create an array of bars
  bars = document.getElementsByClassName("bar");
    
  // Create an array of panels
  panels = document.getElementsByClassName("panel");
   
  // Record the number of bars
  barsLength = bars.length;
   
  /**
   * Attach event listeners to the bars using onclick
   * Fire the displayPanel function
   */
  for(var i = 0; i < barsLength; i++) {
    
    bars[i].onclick = function() {
      displayPanel(this);
      return false;
    }
  }

  // Add lazy loading
  $(function() {
    $('.lazy').lazy({
      effect: "fadeIn",
      effectTime: 1000,
      threshold: 0
    });
  });
}

// Displays the panel related to the bar clicked
function displayPanel(panelToActivate) {

  // A variable to represent the number of the bar clicked
  var panelNumber = 0;

  // Get the number of the bar clicked
  for(var j = 0; j < barsLength; j++) {

    if( panelToActivate == bars[j] ) {

      panelNumber = j;
      break;
    }
  }

  // Get the dropdown link, dropdown arrow and panel to modify
  var currentBar = bars[panelNumber];
  var currentPanel = panels[panelNumber];

  // If the panel is already displayed
    if( currentPanel.classList.contains("active") ) {

      // Remove the "active" class from the panel
      currentPanel.classList.remove("active");
    }

    // If the panel is not already displayed
    else {

      // Add the "active" class to the panel
      currentPanel.classList.add("active");
    }
}
