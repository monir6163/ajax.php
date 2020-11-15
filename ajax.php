<script>
      function test(){
        var username = $("#username").val();      
        $.ajax({
            type: "POST",
            url:"ajax.php",
            data: ({
                uname:username
            }),          
            success: function(response) {
                alert(response);
            }
        });
      }
    </script>