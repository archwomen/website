<?php
  $title = "Contact";
  include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
?>
      <article role="main">
        <h2 role="heading">Contact</h2>
        <form method="post" action="email.php">
          Email: <input name="email" id="email" type="text" /><br />
          Message:<br />
          <textarea name="message" id="message" rows="15" cols="40"></textarea><br />
          <input type="submit" value="Submit" />
        </form>
      </article>
<?php include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php"; ?>
