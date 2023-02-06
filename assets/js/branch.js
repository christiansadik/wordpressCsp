jQuery(document).ready(function($){
    let pathname = window.location.pathname;
    let array_pathname = pathname.split('/');
    let slug = array_pathname[array_pathname.length - 2];
    $('#slug-page').val(slug);
});