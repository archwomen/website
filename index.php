<?php
  include $_SERVER['DOCUMENT_ROOT']."/inc/header.php";
?>
    <article class="clearfix" role="main">
      <section class="col-1-2">
        <h2 role="heading">Welcome!</h2>
        <img width="100" height="66" alt="W icon" class="left" src="assets/images/ArchW.png">
        <p>
          Arch Linux Women (Arch Women or A-W for short) is an all inclusive 
          organization of Arch Linux enthusiasts with a focus on helping more 
          women become involved in the Arch Linux community and 
          <abbr title="free open source software"> FOSS</abbr>.
        </p>
        <p>
          To this end, we provide a safe space for people of all genders and 
          backgrounds to share skills, learn, network and socialize. 
          Anyone with an interest in the project is welcome to participate.
        </p>
      </section>
      <section class="col-2-2">
        <h2 role="heading">Get Involved</h2>
        <p>
          Do you want to
          <a href="https://wiki.archlinux.org/index.php/Classroom">teach a class</a>, organize an event, 
          <a href="https://github.com/archwomen">write code</a>,
          or simply join the conversation? 
          See how you can <a href="/contribute">contribute</a> to the project!
        </p>
        <p>
          We are also looking for sponsors and donations.
        </p>
      </section>
    </article>
    <article class="clearfix">
      <section class="col-1-2">
        <h2 role="heading">Projects</h2> 
        <h3><a href="https://wiki.archlinux.org/index.php/Classroom">Classroom</a></h3>
        <p>
          Arch Linux Classroom is a project to develop and host classes and
          teaching materials that can be used by the Arch Linux community.
        </p>
        <h3><a href="https://archwomen.org/wiki/projects:internships:start">Internship</a></h3>
        <p>
          Internships to work on Arch Linux development: GSoC, OPW.
        </p>
        <h3><a href="https://archwomen.org/wiki/projects:mentorship:start">Mentor connection</a></h3>
        <p>
          Our goal here is to help people find a mentor who can help 
          with specialist knowledge.
        </p>
      </section>
      <?php
        include('inc/rss.php');

        $feedlist = new atom('https://archwomen.org/blog/feed.atom');
        echo '<section class="col-2-2">', $feedlist->display(6,"<h2>Blog</h2>"), '<p><a href="https://archwomen.org/blog/">Read more</a></p></section></article>';

        $feedlist = new rss('https://archwomen.org/calendar//rss/rss2.0.php?cal=&cpath=&rssview=month');
        echo '<article class="clearfix"><section class="col-1-2">', $feedlist->display(4,"<h2>Upcoming Events</h2>"), '</section>';

        //$feedlist = new atom('https://archwomen.org/news/?type=atom10');
        //echo '<section class="col-2-2">', $feedlist->display(4,"<h2>Community News</h2>"), '<p><a href="https://archwomen.org/news/">Read more</a></p></section></article>';
      ?>
<?php include $_SERVER['DOCUMENT_ROOT']."/inc/footer.php"; ?>
