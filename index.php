<?php
  include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
?>
    <div class="grid grid-pad">
      <div class="col-1-2">
        <div class="content">
          <h2 role="heading">Welcome!</h2>
          <img alt="W icon" class="left" src="assets/images/ArchW.png">
          <p class="justify">You've reached the site for the Arch Linux Women project. 
          Arch Linux Women (Arch Women or A-W for short) is an all inclusive 
          organization of Arch Linux enthusiasts with a focus on helping more
          women become involved in the Arch Linux community and 
          <abbr title="free open source software"> FOSS</abbr>. To do 
          this, we provide a safe space for people of all genders and 
          backgrounds to share skills, learn, network and socialize. 
          Anyone with an interest in our mission is welcome to participate.</p>
        </div>
      </div>
      <div class="col-1-2">
        <div class="content">
          <h2 role="heading">Get Involved</h2>
          <ul class="left">
            <li>
              <a href="/join">Join</a>
              <ul>
                <li><a href="/join/#women">Women</a></li>
                <li><a href="/join/#ally">Allies</a></li>
              </ul>
            </li>
            <li>Spread the word</li>
            <li>Sponsor us</li>
          </ul>
          <ul class="left">
            <li>
              <a href="/contribute">Contribute to the project</a>
              <ul>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/wiki">Wiki</a></li>
                <li>Teach</li>
                <li><a href="https://github.com/archwomen">Github</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="grid grid-pad">
      <div class="col-1-2">
        <div class="content">
          <h2 role="heading">Projects</h2> 
          <h3><a href="https://wiki.archlinux.org/index.php/Classroom">Classroom</a></h3>
          <p>
            Arch Linux Classroom is a project to develop and host classes and
            teaching materials that can be used by the Arch Linux community.<br />
            <a href="https://wiki.archlinux.org/index.php/Classroom">Read more!</a>
          </p>
          <h3><a href="https://archwomen.org/wiki/projects:internships:start">Internship</a></h3>
          <p>
            Internships to work on Arch Linux development: GSoC, OPW.<br />
            <a href="https://archwomen.org/wiki/projects:internships:start">Read more!</a>
          </p>
          <h3>Mentor Connection</h3>
        </div>
      </div>
      <?php
        include('inc/rss.php');

        $feedlist = new atom('https://archwomen.org/blog/feed.atom');
        echo '<div class="col-1-2"><div class="content">', $feedlist->display(6,"<h2>Blog</h2>"), '<p><a href="https://archwomen.org/blog/">Read more</a></p></div></div></div>';

        $feedlist = new rss('https://archwomen.org/calendar//rss/rss2.0.php?cal=&cpath=&rssview=month');
        echo '<div class="grid grid-pad"><div class="col-1-2"><div class="content">', $feedlist->display(4,"<h2>Upcoming Events</h2>"), '</div></div>';

        $feedlist = new atom('https://archwomen.org/news/?type=atom10');
        echo '<div class="col-1-2"><div class="content">', $feedlist->display(4,"<h2>Community News</h2>"), '<p><a href="https://archwomen.org/news/">Read more</a></p></div></div></div>';
      ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php"; ?>
