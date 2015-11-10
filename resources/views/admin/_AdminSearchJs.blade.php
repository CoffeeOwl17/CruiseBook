<script>
  $(document).ready(function() {
      if(localStorage.getItem("nickname") == null){
        alert('Please login as organization account');
        window.location.href = "/";
      }
      else{
        $(".nickname").text(localStorage.getItem("nickname"));
      }
      
      $('.logout').click(function(e) {
        localStorage.clear();

      });

      $('#package_table').DataTable();
  });
</script>