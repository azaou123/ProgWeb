$(document).ready(function() {
    $('.partners-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        pauseOnHover: false
    })
});


function largeSearch() {
    document.getElementById('logo').style.display = 'none';
    document.getElementById('text').style.display = 'none';

    var search = document.getElementById('search');
    var close = document.getElementById('close');

    search.classList.add('p-5')
    search.classList.remove('col-4')
    search.classList.add('col-11')
    close.classList.add('col-1')
    close.style.display = 'flex'
    close.style.justifyContent = 'center'
    close.style.alignItems = 'center'
}

function smallSearch() {
    document.getElementById('logo').style.display = 'block';
    document.getElementById('text').style.display = 'block';
    var search = document.getElementById('search');
    var close = document.getElementById('close');
    search.classList.remove('p-5')
    search.classList.add('col-4')
    search.classList.remove('col-11')
    close.style.display = 'none'

}