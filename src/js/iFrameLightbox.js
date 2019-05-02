($ => {

   /* Once the page has been loaded, initialize the IframeLightbox instance on all elements matching the specified class name */
   $(document).ready(() => {
      /* Find all elements with specified class, and initialize the iFrameLightbox for each */
		[].forEach.call(document.getElementsByClassName("iframe-lightbox-link"), function(el) {
			el.lightbox = new IframeLightbox(el, {
            /* Set onLoaded event listener for main iFrameLightbox instances */
            onLoaded: function (el) {
               /* Save array of existing iFrameLightbox elements found on the page */
               let iFrameElArr = document.getElementsByClassName("iframe-lightbox-link");
               /* Quick check to make sure iFrame elements are found */
               if ( iFrameElArr.length > 0 ) { 
                  /* Save the iFrame content container as variable */
                  let iFrameContentContainer = document.querySelectorAll(".iframe-lightbox.is-showing.is-opened .content-holder")[0];
                  /* Create new node for iFrame quick links container, and assign ID */
                  let iFrameQuickLinksContainer = document.createElement("div");
                  iFrameQuickLinksContainer.id = "iframe-quicklinks-container";
                  /* Append the new quick links container div to the iFrame content container */
                  iFrameContentContainer.appendChild(iFrameQuickLinksContainer);
               }
               /* For each of the iFrameLightbox elements found, create a quick link equivalent and append to the iFrameLightbox quick link container */
               for (let i = 0; i < iFrameElArr.length; i++) {
                  /* Save the iFrame quick link container as variable */
                  let iFrameQuickLinksContainer = document.querySelectorAll('#iframe-quicklinks-container')[0];
                  /* Create a new node for single iFrame quick link, and assign class, href & text content */
                  let iFrameQuicklinkEl = document.createElement("a");
                  /* If the clicked iFrame element's href == the current iFrame quick link's href, add the 'active' class */
                  console.log('el.href: ' + el.href);
                  console.log('iFrameElArr[i].getAttribute("href"): ' + iFrameElArr[i].getAttribute("href"));
                  if ( iFrameElArr[i].getAttribute("href") == el.href ) {
                     iFrameQuicklinkEl.className = "iframe-lightbox-quicklink iframe-link-active";
                  } else {
                     iFrameQuicklinkEl.className = "iframe-lightbox-quicklink";
                  }
                  iFrameQuicklinkEl.href = iFrameElArr[i].getAttribute("href");
                  iFrameQuicklinkEl.textContent = iFrameElArr[i].getElementsByClassName("caption-overlay")[0].textContent.trim();
                  /* Append to quick links container */
                  iFrameQuickLinksContainer.appendChild(iFrameQuicklinkEl);
               }
               /* For each of the iFrameLightbox quick links, initialize and set required event listeners */
               [].forEach.call(document.getElementsByClassName("iframe-lightbox-quicklink"), function (quicklink_el) {
                  quicklink_el.lightbox = new IframeLightbox(quicklink_el, {
                     /* Set onOpened event listener for quick link iFrameLightbox instances */
                     onOpened: function() {
                        /* Show the pre-loaded/spinning circles */
                        document.querySelectorAll(".iframe-lightbox .content > .body")[0].classList.remove("is-loaded");
                        /* Loop through all quick links, remove 'active' class, then add 'active' class to opened quick link */
                        let iFrameQuicklinks = Array.from(document.querySelectorAll(".iframe-lightbox-quicklink"));
                        iFrameQuicklinks.forEach(node => {
                           node.classList.remove("iframe-link-active");
                        });
                        quicklink_el.classList.add("iframe-link-active");
                     },
                     /* Set onLoaded event listener for quick link iFrameLightbox instances */
                     onLoaded: function() {
                        /* Hide the pre-loaded/spinning circles */
                        document.querySelectorAll(".iframe-lightbox .content > .body")[0].classList.add("is-loaded");
                     }
                  });
               });
            },
            /* Set onClosed event listener for main iFrameLightbox instances */
            onClosed: function (el) {
               /* Remove the quick links entirely, when the lightbox is closed */
               document.getElementById("iframe-quicklinks-container").remove();
            },
            /* Set iFrameLightbox touch functionality to true */
            touch: true
			});
		});
   });

})(jQuery);
