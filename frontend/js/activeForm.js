function active(elem) {
    elem.find('.oneOfTemplates').show();
    elem.find('.current').hide();
    elem.find('.param-input').show();
    elem.find('#edit-button').text('Save');
    elem.find('#edit-button').removeClass('edit');

    return false;
}