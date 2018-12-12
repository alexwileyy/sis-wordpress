const global = {
    showMenu: false,
    menuState: 'closed'
};

jQuery(document).ready(function(){

    // Select all links with hashes
    jQuery('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                // Figure out element to scroll to
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    jQuery('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = jQuery(target);
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            // $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });

    $('#menu-mobile-footer .menu-item').click(toggleMenu);

    $('.header-slider__wrapper').slick({
        autoplay: true,
        arrows: false,
        adaptiveHeight: true,
        autoplaySpeed: 5000
    });

    $('.remove-script').remove();
    objectFitImages();

    //Router
    let url = window.location.href;
    url = url.replace(/(\?).*/, "");
    const splitUrl = url.split('/');
    if (splitUrl[splitUrl.length - 1].length === 0) {
        splitUrl.splice(-1, 1);
    }
    const route = splitUrl[splitUrl.length - 1];

    switch (route){
        case "contact":
            contact();
    }

});


function trainingSelectCourse(index) {
    $('.training-courses--box-title').text(trainingCourses[index]['name']);
    if (trainingCourses[index]['description'].length > 0) {
        $('.training-courses--box-desc').text(trainingCourses[index]['description']);
    } else {
        $('.training-courses--box-desc').html("Please <a href='/contact'>contact us</a> for more information");
    }
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

//Routes
function contact() {
    console.warn('Contact');
    const status = getParameterByName('status', window.location.href);
    if (status === 'done') {
        $('.contact--form-submitted').addClass('show');
        $('.contact__form').remove();
    }
}

const toggleMenu = () => {
    const body = document.getElementsByTagName('body');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuContainer = mobileMenu.querySelectorAll('.menu-left')[0];
    global.showMenu = !global.showMenu;
    global.menuState = global.menuState === 'closed' ? 'open' : 'closed';
    menuContainer.style.left = global.showMenu ? '0' : '-100%';
    mobileMenu.style.visibility = global.showMenu ? 'visible' : 'hidden';
    body[0].classList.toggle('menu-open');
};