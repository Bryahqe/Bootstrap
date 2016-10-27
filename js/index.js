/**
 * Created by bryan on 10/10/2016.
 */
$('.toggle').click(function(){
    $('form').animate({height: "toggle", opacity: "slow"});
});

//popover
$(function () {
    $('[data-toggle="popover"]').popover()
})