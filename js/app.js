/*----------------------------------------
 # Init feature.js
 @desc Adds feature classes to <html>
 @see http://featurejs.com/
----------------------------------------*/
feature.testAll();

// Add toch or no-touch class
if (feature.touch) {
  document.documentElement.className += " touch";
} else {
  document.documentElement.className += " no-touch";
}

var clickEvent = (('ontouchstart' in window) || (window.DocumentTouch && document instanceof DocumentTouch)) ? 'touchstart' : 'click';
var touchNav = document.getElementById('touch-nav');
var trigger = document.getElementById('nav-trigger');

trigger.addEventListener(clickEvent, function() {
  if ( !touchNav.classList.contains('is-visible') ) {
    touchNav.classList.add('is-visible');
    document.body.classList.add('no-scroll');
  } else {
    console.log('Touch Nav has the class is-visible ');
    touchNav.classList.remove('is-visible');
    document.body.classList.remove('no-scroll');
  }
});
