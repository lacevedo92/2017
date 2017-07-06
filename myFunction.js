function run() {
    //JavaScript
    document.getElementById("demo").innerHTML = "Everything to run your restaurant";
}
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropdown() {
    document.getElementById("profileDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.topnav-icons')) {

    var dropdowns = document.getElementsByClassName("dropdownContent");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

/*
 * Change session array so we can navigate to profile page
 */
function changePage(){
    var session = '<?php $_SESSION["next_page"]="profile" ?>';
    eval(session);
}