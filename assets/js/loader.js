var myVar;

function loader() {
    myVar = setTimeout(showPage, 300);
}

function showPage() {
    $('#loader').addClass('hide');
    $('.landing-page-container').addClass('show');
}