




//mobile hamburger toggle
$(function() {
  function slideMenu() {
    var activeState = $("#menu-container .menu-list").hasClass("active");
    $("#menu-container .menu-list").animate({left: activeState ? "0%" : "-100%"}, 400);
  }
  $("#menu-wrapper").click(function(event) {
    event.stopPropagation();
    $("#hamburger-menu").toggleClass("open");
    $("#menu-container .menu-list").toggleClass("active");
    slideMenu();

    $("body").toggleClass("overflow-hidden");
  });

  $(".menu-list").find(".accordion-toggle").click(function() {
    $(this).next().toggleClass("open").slideToggle("fast");
    $(this).toggleClass("active-tab").find(".menu-link").toggleClass("active");

    $(".menu-list .accordion-content").not($(this).next()).slideUp("fast").removeClass("open");
    $(".menu-list .accordion-toggle").not(jQuery(this)).removeClass("active-tab").find(".menu-link").removeClass("active");
  });
}); 

$(document).ready(function() {
  $("#hide").click(function(event) {
      event.preventDefault();

      var currentColor = $("#r").css("background-color");
      var newColor = (currentColor === "rgb(0, 0, 255)") ? "transparent" : "brown";
      $("#hide").css("color", "blue");

      $("#hide").css("background-color", newColor);
  });
});




document.getElementById('emailForm').addEventListener('submit', function(event) {
  // Check email validity using JavaScript
  var emailInput = document.getElementById('Input-Focus');
  if (!emailInput.checkValidity()) {
      alert('Please enter a valid email address.');
      event.preventDefault(); // Prevent form submission
  }
});

// select control accesess script
let select = document.querySelector("select");

    select.addEventListener("focus", () => {
        select.size = 5;
        select.classList.add("fadeIn");
        select.classList.remove("fadeOut");
        select.style.backgroundColor = "#FFF";
    });

    select.addEventListener("blur", () => {
        select.size = 1;
        select.classList.add("fadeOut");
        select.classList.remove("fadeIn");
        select.style.backgroundColor = "#FFF";
    });

    select.addEventListener("change", () => {
        select.size = 1;
        select.blur();
        select.style.backgroundColor = "#FFF";
    });

    select.addEventListener("mouseover", () => {
        if (select.size == 1) {
            select.style.backgroundColor = "rgb(247, 247, 247)";
        }
    });
    select.addEventListener("mouseout", () => {
        if (select.size == 1) {
            select.style.backgroundColor = "#FFF";
        }
    });

// password reset received external file to show the red dot
 const receivedcontent = true;
  const redDot = document.getElementById("redDot");
  if(receivedcontent){
    redDot.style.display = "block";
  }else{
    redDot.style.display = "none";
  }

  function updateFileName() {
    const fileInput = document.getElementById("xl-file");
    const fileLabel = document.getElementById("xl-file-label");
    const clearFileBtn = document.querySelector(".clear-file");

    if (fileInput.files.length > 0) {
        fileLabel.textContent = fileInput.files[0].name;
        clearFileBtn.style.display = "inline-block";
    } else {
        fileLabel.textContent = "Choose file...";
        clearFileBtn.style.display = "none";
    }
}

function clearFileSelection() {
    const fileInput = document.getElementById("xl-file");
    const fileLabel = document.getElementById("xl-file-label");
    const clearFileBtn = document.querySelector(".clear-file");

    fileInput.value = ""; // Clear the file input
    fileLabel.textContent = "Choose file...";
    clearFileBtn.style.display = "none";
}





(function() {
  // Bind Click event to the drop down navigation button
  document.querySelector('.nav-button').addEventListener('click', function() {
    /*  Toggle the CSS closed class which reduces the height of the UL thus 
        hiding all LI apart from the first */
    this.parentNode.parentNode.classList.toggle('closed')
  }, false);
})();
