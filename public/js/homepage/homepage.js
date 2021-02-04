$('.owl-carousel').owlCarousel({
    loop       : true,
    margin     : 0,
    dots       : false,
    nav        : true,
    navText    : [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive : {
        0    : {
            items : 1
        },
        600  : {
            items : 3
        },
        1000 : {
            items : 5
        }
    }
})
