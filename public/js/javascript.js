const body = document.getElementsByTagName('body')[0]
let toggleadmin = document.querySelector('.toggle-admin');


window.addEventListener("scroll", function () {
    var nav = document.querySelector('nav');
    var searchbar = document.querySelector('.searchbar');
    nav.classList.toggle('sticky', window.scrollY > 0);
    searchbar.classList.toggle('sticky', window.scrollY > 0);
});

window.onclick = function (event) {
    openCloseDropdown(event)
}

function closeAllDropdown() {
    var dropdown = document.getElementsByClassName('dropdown-expand')
    for (var i = 0; i < dropdown.length; i++) {
        dropdown[i].classList.remove('dropdown-expand')
    }
}

function openCloseDropdown(event) {
    if (!event.target.matches('.dropdown-toggle')) {

        //Close dropdown when click out of dropdown menu

        closeAllDropdown()
    } else {
        var toggle = event.target.dataset.toggle
        var content = document.getElementById(toggle)
        if (content.classList.contains('dropdown-expand')) {
            closeAllDropdown()
        } else {
            closeAllDropdown()
            content.classList.add('dropdown-expand')
        }
    }
}

$(document).ready(function () {
    $('.carousel-01').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        dots: true,
    }); 
    
    //AOS Instance
AOS.init()
});

//modal
var modalBtns = document.querySelectorAll('.modal-open');
modalBtns.forEach(function (btn) {
    btn.onclick = function () {
        var modal = btn.getAttribute('data-modal');
        document.getElementById(modal).style.display = "flex";
    };
});

var closeBtns = document.querySelectorAll('.modal-close');
closeBtns.forEach(function (btn) {
    btn.onclick = function () {
        var modal = btn.closest('.modal').style.display = "none";
    };
});

function collapseSidebar() {
    body.classList.toggle('sidebar-expand');
    toggleadmin.classList.toggle('active');
;
}


