<?php
  $title = "Community Standards";
  $custom = "<style>form{margin-top:1.3em;}.form-inline .form-group {display: inline-block;margin-bottom: 0;vertical-align: middle;}</style><link rel='stylesheet' href='odometer-theme-default.css'>";
  include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
?>
      <article role="main">
        <h2>We currently need<strong class="animation"> $<span class="odometer odometer-auto-theme">50</span></strong> to reach
            our goal of $50 for the year.
        </h2>
        <h3>It takes people like you to keep our organization
            going. Your donation will help pay for our hosting costs and the
            services we provide for Arch Linux users.
        </h3>
        <form class="form-inline" role="form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" name="item_name" placeholder="nickname or message">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <label for="email">Email address: </label>
              <input id="email" type="text" class="form-control" name="email" placeholder="your@email.com">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <label for="amount">Amount: $</label>
              <input id="amount" type="text" class="form-control" name="amount" value="10">
            </div>
          </div>
          <input type="hidden" name="charset" value="utf-8">
          <input type="hidden" name="currency_code" value="USD">
          <input type="hidden" name="business" value="admin@archwomen.org">
          <input type="hidden" name="return" value="http://archwomen.org/">
          <input type="hidden" name="notify_url" value="http://archwomen.org/donate/ipn.php">
          <input type="hidden" name="cmd" value="_donations">
          <img alt="paypal" src="https://www.paypalobjects.com/tr_TR/i/scr/pixel.gif" width="1" height="1">
          <button type="submit" class="btn btn-default">Donate Now</button>
        </form>
      </article>
      <article id="donations" class="donations">
        <h3>Thank you to all of our doners, we are grateful for your support.</h3>
        <ol id="donationList"></ol>
      </article>
      <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
      <script src="odometer.min.js"></script>
      <script>
        $(function () {
          var goal = 50;
          var toalAmount = 0;
          var lastAmount = 0;
          var lastDonation = 0;
        $.getJSON("donations.json", function (data) {
            var items = [];
            $.each(data, function (key, val) {
                toalAmount += val.gross * 1;
                items.push("<li class='content'><span class='message'>" + val.message +
                ": </span><span class='gross'>$" + val.gross + "</span></li>");
            });
            lastDonation = data[data.length - 1]['gross'] * 1;
            lastAmount = goal - toalAmount;
            $('.animation').addClass('animate');
            $('.animation u').html('-' + lastDonation);
            var el = document.querySelector('.animation span');
            var od = new Odometer({
                el: el,
                value: (lastAmount + lastDonation),
                format: ''
            });
            od.update(lastAmount)
            $('#donationList').html(items.join(""));
          });
        });
      </script>
<?php include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php"; ?>
