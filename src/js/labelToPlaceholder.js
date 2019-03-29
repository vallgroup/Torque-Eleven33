($ => {
  $(document).ready(() => {
    const adminBar = $('#wpadminbar');
    if (0 < adminBar.length) {
      $('header.torque-header').css('margin-top', adminBar.height() )
    }
    $(".grunion-field-wrap").each(function() {
      const label = $(this)
        .find("label")
        .first();

      const name = $(label)
        .find("span")
        .remove();

      if (name) {
        $(this)
          .find("input, textarea")
          .attr("placeholder", $(label).html());
      }
    });
  });
})(jQuery);
