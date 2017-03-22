(function ($) {
    $('.tablinks').on('click', function (event) {
        event.preventDefault();
        openTab(event, $(this).val());
    });

    // Drop down category
    $('.info-dropdown').click(function () {
        if ($(this).siblings('.module-field').is(':hidden')) {
            $(this).siblings('.module-field').slideDown('normal');
            $(this).children('span').text('-');
        } else {
            $(this).siblings('.module-field').slideUp('normal');
            $(this).children('span').text('+');
        }
    });

})(jQuery); 


function openTab(evt, moduleID) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(moduleID).style.display = "block";
    evt.currentTarget.className += " active";
}