<script>
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
            localStorage.setItem('nickname', userProfile['nickname']);
            window.location.href = "/admin";
            // $.post( "/login", { login_token: token, nickname: userProfile['nickname'] } );
            // location.reload();
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

      $("#dateDOB").datepicker({
        maxDate: '0',
        numberOfMonths: 2
      });

      $('#submitPassenger').on('click',function(e){
        if(!($("input#txtFirstName").val() && $("input#txtLastName").val() && $("input#txtIC").val() 
          && $("input#dateDOB").val() && $("#txtAddress").val() && $("input#txtEmail").val())){
          alert('All fields must be filled');
          e.preventDefault();
        }
        else{
          e.preventDefault();
          $('#dialog').dialog('open');
        } 
      });

      $('#dialog').dialog({
        autoOpen: false,
        modal: true,
        buttons: {
          "Confirm": function(e) {
            $(this).dialog('close');
            $('#PassengerForm').submit();


          },
          "Cancel": function() {
            $(this).dialog('close');
          }
        }
      });

  });
</script>