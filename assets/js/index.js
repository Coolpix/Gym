$(document).ready(function(){
    $(".horario").on('click', function (event) {
        var scheduleData = $(this).data('schedule');
        event.preventDefault();
        $(".schedule:visible").fadeOut('500', function () {
            var id = 'schedule_' + scheduleData;
            $("#" + id).fadeIn('500');
        });
    });
});