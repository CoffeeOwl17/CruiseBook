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

      $("#datepicker-from").datepicker({
        minDate: '+1m',
        numberOfMonths: 2,
        onSelect: function(selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#datepicker-until").datepicker("option", "minDate", dt);
        }
      });

      $("#datepicker-until").datepicker({
        minDate: '+1m',
        // maxDate: '0',
        numberOfMonths: 2,
        onSelect: function(selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#datepicker-from").datepicker("option", "maxDate", dt);
        }
      });

      $("#datepicker-from").blur(function(){
          val = $(this).val();
          val1 = Date.parse(val);
          if (isNaN(val1)==true && val!==''){
             alert("Invalid date!")
             currentText: "Now"
          }
      });

      $('#addCruise').bind('submit',function(e){
        if(!($("input#inputCruise").val() && $("input#datepicker-from").val() && $("input#datepicker-until").val() 
          && $("input#departureLocation").val() && $("input#arrivalLocation").val() && $("input#price").val())){
          alert('All fields must be filled');
          e.preventDefault();
        } 
      });
  });
</script>