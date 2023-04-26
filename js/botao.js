$(document).ready(function() {
    var menu = $(".navbar-collapse");
    var toggleButton = $(".navbar-toggler");
    var isActive = false;
    
    $(document).click(function(event) {
      if (isActive && !$(event.target).closest(menu).length && !$(event.target).closest(toggleButton).length) {
        menu.collapse("hide");
        isActive = false;
      }
    });
    
    toggleButton.click(function() {
      menu.collapse("toggle");
      isActive = !isActive;
    });
    
    $(window).scroll(function() {
      if (menu.hasClass("show")) {
        menu.collapse("hide");
        isActive = false;
      }
    });
  });