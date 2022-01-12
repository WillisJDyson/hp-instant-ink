var quants = document.getElementsByClassName("quantity");
var prices = document.getElementsByClassName("price");
var grids = document.getElementsByClassName("ii-details__grid");
var freeCreds = document.getElementsByClassName("product__free-credit");
var urls = document.getElementsByClassName("url");
var atbs = document.getElementsByClassName("atb");
var monthlyQuants = document.getElementsByClassName("ii-quant");
var monthlyPrices = document.getElementsByClassName("ii-price");



// Reset all Ink quantity values to 1 on load
    var quants = document.getElementsByClassName("quantity");

    for (var i = 0; i < quants.length; i++) {
      quants[i].value = 1;
    }
//



// --- Ink yield selection ---
        document.getElementById("hyBtn").addEventListener("click", highYields);     // Add event listeners to ink yield selection buttons
        document.getElementById("syBtn").addEventListener("click", standardYields);     // Add event listeners to ink yield selection buttons

    // Change styling of "High Yields button"
        function highYields() {
            document.getElementById("highYields").style.display = "block";
            document.getElementById("standardYields").style.display = "none";
            document.getElementById("hyBtn").style.fontWeight = "700";
            document.getElementById("syBtn").style.fontWeight = "400";
            document.getElementById("hyDesc").style.display = "block";
            document.getElementById("syDesc").style.display = "none";
        }
    // 

    // Change styling of "Standard Yields button"
        function standardYields() {
            document.getElementById("highYields").style.display = "none";
            document.getElementById("standardYields").style.display = "block";
            document.getElementById("hyBtn").style.fontWeight = "400";
            document.getElementById("syBtn").style.fontWeight = "700";
            document.getElementById("hyDesc").style.display = "none";
            document.getElementById("syDesc").style.display = "block";
        }
    //
// -------



// --- Show Instant Ink Details Grid ---
    var showGrids = document.getElementsByClassName("ii-details__button");    // Retrieve all "Show Grid" buttons
    for (var i = 0; i < showGrids.length; i++) {    // Loop through buttons, add event listeners
      showGrids[i].addEventListener("click", show);
    }

    // Show Instant Ink grid function
        function show() {   
        var clickedShow = (Array.from(showGrids).indexOf(event.target));    // Get index of every "Show Grid" button on the page, then change styling of the grid with the same index
          showGrids[clickedShow].style.display = 'none';     
          hideGrids[clickedShow].style.display = 'block';
          grids[clickedShow].style.display = 'block';
          freeCreds[clickedShow].style.backgroundColor = '#B700AD';
          freeCreds[clickedShow].style.color = '#fff';
          freeCreds[clickedShow].style.fontSize = '18px';
          freeCreds[clickedShow].style.padding = '12px 24px 12px 24px';
          freeCreds[clickedShow].textContent = 'Receive £10 credit when you enroll in HP Instant Ink';
        }
    // 
// -------



// --- Hide Instant Ink Details Grid ---
    var hideGrids = document.getElementsByClassName("ii-details__button--hidden-text");     // Retrieve all "Show Grid" buttons
    for (var i = 0; i < hideGrids.length; i++) {         // Loop through buttons, add event listeners
      hideGrids[i].addEventListener("click", hide);
    }

    // Hide Instant Ink grid function
        function hide() {    
            var clickedHide = (Array.from(hideGrids).indexOf(event.target)); 
            showGrids[clickedHide].style.display = 'block';
            hideGrids[clickedHide].style.display = 'none';
            grids[clickedHide].style.display = 'none';
            freeCreds[clickedHide].style.backgroundColor = '#ffffff';
            freeCreds[clickedHide].style.color = '#B700AD';
            freeCreds[clickedHide].style.fontSize = '14px';
            freeCreds[clickedHide].style.padding = '4px 16px 4px 16px';
            freeCreds[clickedHide].textContent = 'Receive £10 credit with HP Instant Ink';
        }
    // 
// -------



// --- Get selected quantity, then add quantity to button URL ---
    for (var i = 0; i < quants.length; i++) {
        quants[i].addEventListener("change", createUrl); // Loop through all quantity selectors, add event listeners to all
    }

    // Generate URL based on selected quantity
        function createUrl() {
            var selectIndex = (Array.from(quants).indexOf(event.target));  // Get index of all quantity selection buttons
            var selectedQuant = quants[selectIndex].value; // Assign value of current quantity selector to variable
            var newLink = (atbs[selectIndex].href).slice(0, -1) + selectedQuant; // Swap last number of link with quantity selected
            atbs[selectIndex].href = newLink; // Set the href of the current "Add to basket" button to the newly-generated link
        }
    // 
// -------



// --- Monthly quantity and price changes
    for (var i = 0; i < monthlyQuants.length; i++) {    // Loop through all monthly quantity selectors
      monthlyQuants[i].addEventListener("change", getMonthlyQuant);     // Add event listeners to all selectors
      monthlyQuants[i].value = "15";    // Reset all to 15 pages per month
    }

    for (var i = 0; i < monthlyPrices.length; i++) {    // Loop through all monthly prices
      monthlyPrices[i].innerText = "£0.99/month";   // Set all back to £0.99/month
    }



    // Get selected monthly quantity, and display price
        function getMonthlyQuant() {
            var selectMonthlyIndex = (Array.from(monthlyQuants).indexOf(event.target)); 
            var selectedMonthlyQuant = monthlyQuants[selectMonthlyIndex].value;
            if (selectedMonthlyQuant == 15) {
                monthlyPrices[selectMonthlyIndex].innerText = "£0.99/month";
            } else if (selectedMonthlyQuant == 50) { 
                monthlyPrices[selectMonthlyIndex].innerText = "£1.99/month";
            } else if (selectedMonthlyQuant == 100) { 
                monthlyPrices[selectMonthlyIndex].innerText = "£3.49/month";
            } else if (selectedMonthlyQuant == 300) { 
                monthlyPrices[selectMonthlyIndex].innerText = "£9.99/month";
            } else if (selectedMonthlyQuant == 700) { 
                monthlyPrices[selectMonthlyIndex].innerText = "£22.49/month";
            }
        }
    // 
//  -------
