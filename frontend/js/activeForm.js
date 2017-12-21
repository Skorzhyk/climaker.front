$(function() {
    var id = $('#room-id').val();
    if (!id) {
        active();
    }

    $('body').on('click', '#main-button', function () {
        if ($(this).hasClass('edit')) {
            return active();
        }
    });
});

function active() {
    $('.current').hide();
    $('.param-input').show();
    $('#main-button').text('Save');
    $('#main-button').removeClass('edit');

    return false;
}