($ => {
  $(document).ready(() => {
    const adminBar = $('#wpadminbar');
    const headerBar = $('#header-style-1');
    const specialsBar = $('.specials-bar');
    const heroFiller = $('.page-hero-filler');
    const headerBuffer = 0;
    // admin bar
    if (0 < adminBar.length) {
      $('header.torque-header').css('margin-top', adminBar.height() )
    }

    // update page hero filler height on doc load and window resize
    resizeHeroFiller();
    $(window).resize(() => {
      resizeHeroFiller();
    });

    // resize hero page filler
    function resizeHeroFiller () {
      if (
        headerBar.length > 0 
        && specialsBar.length > 0
        && heroFiller.length > 0
      ) {
        // get total header height + buffer
        const totalHeight = headerBar.outerHeight() + specialsBar.outerHeight() + headerBuffer;
        // update filler
        heroFiller.css('padding-top', totalHeight);
      }
    }
  });
})(jQuery);
