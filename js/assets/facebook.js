window.fbAsyncInit = function() {
    FB.init({
      appId      : '1500566816925880',
      xfbml      : true,
      version    : 'v2.4'
    });
    
    if(typeof facebookInit === 'function'){
        facebookInit(FB);
    }
    
  };

(function(d, s, id){
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) {return;}
 js = d.createElement(s); js.id = id;
 js.src = "//connect.facebook.net/en_US/sdk.js";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
