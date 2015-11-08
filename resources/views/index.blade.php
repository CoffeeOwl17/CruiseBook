<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pricess Cruise</title>
    <meta name="_token" content="{{ csrf_token() }}"/>
    <script src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>
    <!-- Auth0 lock script -->
    <script src="//cdn.auth0.com/js/lock-7.9.min.js"></script>

    <!-- Setting the right viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  </head>

  <script>
    var lock = null;
    $(document).ready(function() {
        lock = new Auth0Lock('PfzhgD1FRibmgL6BRIK7ZUpiyiUSh5ug', 'yungtk17.auth0.com');
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
              $('.nick').text(userProfile.nickname);
            }
          });
        });

        $.ajaxSetup({
          'beforeSend': function(xhr) {
            if (localStorage.getItem('userToken')) {
              xhr.setRequestHeader('Authorization',
                    'Bearer ' + localStorage.getItem('userToken'));
            }
          }
        });

    });
  </script>

  <body>
    <form method="post">
      <p>His name is <span class="nick"></span></p>
      <input type="submit" class="btn-login" />
    </form>
  </body>   
</html>