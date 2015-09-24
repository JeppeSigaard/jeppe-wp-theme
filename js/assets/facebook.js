
$(function() {
  $.ajaxSetup({ cache: true });
  $.getScript('//connect.facebook.net/da_DK/sdk.js', function(){
    FB.init({
      appId: '1500566816925880',
      version: 'v2.3' // or v2.0, v2.1, v2.0
    });     
    
    if (typeof facebookInit === 'function'){
        facebookInit();
    }
  });
});