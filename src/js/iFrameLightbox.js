($ => {

   /* Once the page has been loaded, initialize the IframeLightbox instance on all elements matching the specified class name */
   $(document).ready(() => {
		[].forEach.call(document.getElementsByClassName("iframe-lightbox-link"), function(el) {
			el.lightbox = new IframeLightbox(el, {
            onLoaded: function (el) {
               //console.log('opened');
            },
            onLoaded: function (el) {
               //console.log('loaded');
               var iFrameElArr = document.getElementsByClassName("iframe-lightbox-link");
               if ( iFrameElArr.length > 0 ) { 
                  var iFrameQuickLinksContainer = '<div id="iframe-quicklinks-container"></div>';
                  /* Replace with vanilla JS... */
                  jQuery('.iframe-lightbox.is-showing.is-opened .content-holder').append(iFrameQuickLinksContainer);
               }
               for (var i = 0; i < iFrameElArr.length; i++) {
                  var iFrameEl = '<a class="iframe-lightbox-quicklink" href="' + iFrameElArr[i].getAttribute('href') + '">' + iFrameElArr[i].getElementsByClassName("caption-overlay")[0].textContent.trim() + '</a>';
                  jQuery('.iframe-lightbox.is-showing.is-opened .content-holder #iframe-quicklinks-container').append(iFrameEl);
               }
               [].forEach.call(document.getElementsByClassName("iframe-lightbox-quicklink"), function (quicklink_el) {
                  quicklink_el.lightbox = new IframeLightbox(quicklink_el, {
                     onOpened: function() {
                        console.log('quicklink opened');
                        document.querySelectorAll('.iframe-lightbox .content > .body')[0].classList.remove('is-loaded');
                     },
                     onLoaded: function() {
                        console.log('quicklink loaded');
                        document.querySelectorAll('.iframe-lightbox .content > .body')[0].classList.add('is-loaded');
                     }
                  });
               });
            },
            onClosed: function (el) {
               //console.log('closed');
               document.getElementById("iframe-quicklinks-container").remove();
            },
            touch: true
			});
		});
   });

})(jQuery);
