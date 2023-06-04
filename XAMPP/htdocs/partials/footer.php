<script>
$(document).ready(function(){
  /* check if session user */
  var sessionValue = '<?php echo $_SESSION["user_session"]; ?>';
  console.log(sessionValue);
});
</script>