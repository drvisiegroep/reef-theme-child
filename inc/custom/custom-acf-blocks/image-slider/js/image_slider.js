
jQuery( document ).ready(function($) {

    $("#slider").on("input change", (e)=>{
        let sliderPos = e.target.value;
        // Update the width of the foreground image
        $('.img-foreground').css('width', `${sliderPos}%`)
          // Update the position of the slider button (-18 px omdat 30 breedte en 6 padding)
        $('.slider-button').css('left', `calc(${sliderPos}% - 18px)`)
    });

});