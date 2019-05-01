($ => {
   /* Once the page has been loaded, initialize the IframeLightbox instance on all elements matching the specified class name */
   $(document).ready(() => {
      [].forEach.call(document.getElementsByClassName("iframe-lightbox-link"), function(el) {
         el.lightbox = new IframeLightbox(el);
      });
   });
})(jQuery);
