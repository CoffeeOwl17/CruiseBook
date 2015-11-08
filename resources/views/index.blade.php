<script src="https://cdn.auth0.com/js/lock-7.9.min.js"></script>
<script type="text/javascript">
  
  var lock = new Auth0Lock('DyxDQuLCT7Ul4tLPgOMvptTDszBKNyDz', 'yungtk17.auth0.com');
  
  
  function signin() {
    lock.show({
        callbackURL: 'https://localhost:8000/'
      , responseType: 'code'
      , authParams: {
        scope: 'openid profile'
      }
    });
  }
</script>
<button onclick="window.signin();">Login</button>