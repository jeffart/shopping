jQuery(function($){
    $('a[rel=ligthbox]').zoombox({
        theme       : 'zoombox',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
        opacity     : 0.8,              // Black overlay opacity
        duration    : 500,              // Animation duration
        animation   : true,             // Do we have to animate the box ?
        width       : 600,              // Default width
        height      : 400,              // Default height
        gallery     : true,             // Allow gallery thumb view
        autoplay : false                // Autoplay for video
    });
});