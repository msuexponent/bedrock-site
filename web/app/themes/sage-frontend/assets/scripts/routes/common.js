export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    // Make top level navigation clickable
    $('.nav .dropdown-toggle').click(function() { 
        var location = $(this).attr('href'); 
        window.location.href = location; 
        return false; 
    });

  },
};
