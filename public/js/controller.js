$(function () {
    // alert("ss");
    $(document).on('click', '.js_menu', function () {
        var forma = $(this);
        var id = forma.attr('id');
        $('.sub-menu[id="' + id + '"]').toggle();
        return false;
    });
});