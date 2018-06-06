$(document).ready(function(){
    $(".horario").on('click', function (event) {
        let data = $(this).data('schedule');
        event.preventDefault();
        $(".schedule:visible").fadeOut('500', function () {
            let id = 'schedule_' + data;
            $("#" + id).fadeIn('500');
        });
    });
});