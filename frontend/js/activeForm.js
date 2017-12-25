function active(elem) {
    elem.find('.oneOfTemplates').show();
    elem.find('.current').hide();
    elem.find('.param-input').show();
    elem.find('#main-button').text('Save');
    elem.find('#main-button').removeClass('edit');

    return false;
}