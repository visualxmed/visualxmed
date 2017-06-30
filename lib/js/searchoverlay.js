   (function() {
   var triggerBttn = document.getElementById('trigger-overlay'),
      overlay = document.querySelector('div.overlay'),
      closeBttn = overlay.querySelector('button.overlay-close'),
      bodyElem = document.getElementsByTagName("body")[0];
   function toggleOverlay() {
      if(classie.has(overlay, 'open')) {
         classie.remove(overlay, 'open');
         $(".hide-on-search").show();
      }
      else {
         classie.add(overlay, 'open');
         $(".hide-on-search").hide();
      }
   }
   function toggleScrolling() {
      if(classie.has(bodyElem, 'modal-open')) {
         classie.remove(bodyElem, 'modal-open');
      } 
      else {
         classie.add(bodyElem, 'modal-open');
      }
   }
   triggerBttn.addEventListener('click', toggleOverlay);
   triggerBttn.addEventListener('click', toggleScrolling);
   closeBttn.addEventListener('click', toggleOverlay);
   closeBttn.addEventListener('click', toggleScrolling);
   })();