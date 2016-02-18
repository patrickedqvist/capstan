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
