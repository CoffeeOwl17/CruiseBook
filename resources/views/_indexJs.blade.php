<script>
  var lock = null;
  $(document).ready(function() {
      lock = new Auth0Lock('DyxDQuLCT7Ul4tLPgOMvptTDszBKNyDz', 'yungtk17.auth0.com');
      var userProfile;

      $('.btn-login').click(function(e) {
        e.preventDefault();
        lock.show(function(err, profile, token) {
          if (err) {
            // Error callback
            alert(err);
          } else {
            // Success callback

            // Save the JWT token.
            localStorage.setItem('userToken', token);

            // Save the profile

            userProfile = profile;
            $.post( "/login", { login_token: token, nickname: userProfile['nickname'] } );
            location.reload();
            // $('.nick').text(token);
          }
        });
      });

      $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
        'beforeSend': function(xhr) {
          if (localStorage.getItem('userToken')) {
            xhr.setRequestHeader('Authorization',
                  'Bearer ' + localStorage.getItem('userToken'));
          }
        }
      });

  });
</script>