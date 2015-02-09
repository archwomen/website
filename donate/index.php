<?php
  $title = "Community Standards";
  include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
?>
      <article role="main">
        <h2 role="heading">Donate to Arch Women</h2>
        <p>It takes people like you to keep our organization going. Your donation will 
        help pay for our hosting costs and the services we provide for Arch Linux users.</p>
        <form class="form-inline" role="form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" name="item_name" placeholder="nickname or message">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <label class="sr-only" for="email">Email address</label>
              <div class="input-group-addon">@</div>
              <input id="email" type="text" class="form-control" name="email" placeholder="your@email.com">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <label class="sr-only" for="email">Amount</label>
              <div class="input-group-addon">$</div>
              <input id="amount" type="text" class="form-control" name="amount" value="5">
            </div>
          </div>
          <input type="hidden" name="charset" value="utf-8">
          <input type="hidden" name="currency_code" value="USD">
          <input type="hidden" name="business" value="admin@archwomen.org">
          <input type="hidden" name="return" value="http://archwomen.org/">
          <input type="hidden" name="notify_url" value="http://archwomen.org/donate/ipn.php">
          <input type="hidden" name="cmd" value="_donations">
          <img alt="paypal" src="https://www.paypalobjects.com/tr_TR/i/scr/pixel.gif" width="1" height="1">
          <button type="submit" class="btn btn-default">Donate to Arch Women</button>
        </form>
      </article>
<?php include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php"; ?>
