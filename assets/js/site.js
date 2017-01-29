jQuery(document).ready(function($) {
    $('.product-thumbnail').hover(function() {
        /* Stuff to do when the mouse enters the element */
        $('#btns_'+this.id).addClass('in');
        $('#'+this.id).addClass('pt-shadow');
    }, function() {
        /* Stuff to do when the mouse leaves the element */
        $('#btns_'+this.id).removeClass('in');
        $('#'+this.id).removeClass('pt-shadow');
    });
});