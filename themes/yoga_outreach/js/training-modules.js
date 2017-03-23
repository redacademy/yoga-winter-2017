(function ($) {
    
    $( '.tablinks' ).first().addClass('start-module');
    
    //opening Module tabs
    $('.tablinks').on('click', function (event) {
        event.preventDefault();
        if ($(this).hasClass('start-module')) {
            openTab(event, $(this).val());
        }
    });

    $( '.lesson-field' ).first().addClass('start-lesson');


    // Drop down lessons
    $('.individual-lesson').on('click', '.lesson-dropdown', function() {
        if ($(this).next('.lesson-field').hasClass('start-lesson')) {
            $(this).next('.lesson-field').slideDown('normal').siblings()
                    .removeClass('todo').addClass('in-progress').children('.progress')
                    .children('.progress-icon').removeClass('incomplete').addClass('half-way');
        }
    });


    // Complete Lesson
    $('.lesson-field').on('change', '#completed', function() {
        if(this.checked) {
            $(this).parent().siblings('.lesson-dropdown').removeClass('in-progress')
                    .addClass('completed').children('.progress').children('.progress-icon')
                    .removeClass('half-way').addClass('complete');
            $(this).parent('.lesson-field').slideUp('normal').parent().next()
                    .children('.lesson-field').slideDown('normal').siblings()
                    .removeClass('todo').addClass('in-progress').children('.progress')
                    .children('.progress-icon').removeClass('incomplete').addClass('half-way');
        }

        if(!$(this).parent().parent().children('.individual-lesson').children('.lesson-dropdown').not(".completed").length == 0){
            console.log('hello');
            // var moduleComp = $(this).next().val();
            // $(".tablinks").val(moduleComp).addClass('start-module');
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