function navbar(evt, navName) {
    // hide the link
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("body-child");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("nav-link");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
    document.getElementById(navName).style.display = "block";
    evt.currentTarget.className += " active";
}   

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("navaopen").click();
