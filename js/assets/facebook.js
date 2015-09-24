<<<<<<< HEAD
<<<<<<< HEAD
$(function() {
  $.ajaxSetup({ cache: true });
  $.getScript('//connect.facebook.net/da_DK/sdk.js', function(){
    FB.init({
      appId: '{your-app-id}',
      version: 'v2.3' // or v2.0, v2.1, v2.0
    });     
    
    if (typeof facebookInit === 'function'){
        facebookInit();
    }
  });
});
=======
=======
>>>>>>> origin/master
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.4&appId=1566523690226833";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
<<<<<<< HEAD
>>>>>>> origin/master
=======
>>>>>>> origin/master
