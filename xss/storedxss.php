<?php
  // Assume the user's comment is stored in $_POST['comment']
  $comment = $_POST['comment'];
  
  // Save the comment in the database
  $sql = "INSERT INTO comments (content) VALUES ('$comment')";
  // Execute SQL query to save the comment
?>

<!-- Attacker's input -->
<script>
  alert('I have hacked you!');
  // Additional malicious actions...
</script>

