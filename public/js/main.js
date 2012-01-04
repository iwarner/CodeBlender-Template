
/**
 * JQuery DomReady
 */
$(function()
{
    /**
     * Create the overlay for the Portfolio
     */
    $("#portfolioGrid li div.portfolioGroup").tooltip({
        offset   : [184, 0],
        effect   : 'toggle',
        lazy     : false,
        opacity  : .85,
        relative : true
    });
});

