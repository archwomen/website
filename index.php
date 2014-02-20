<!DOCTYPE html>
<html>
    <head>
        <title>Arch Linux Women</title>
        <meta name="description" content="Organizational website for Arch Women">
        <meta name="author" content="Arch Women">
        <meta name="keywords" lang="en-us" content="linux, arch linux, women, arch women, technology, programming, feminism">
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width,initial-scale=1">
		
        <link rel="stylesheet" type="text/css" media="all" href="assets/normalize.css">
		<link rel="stylesheet" type="text/css" media="screen" href="assets/screen.css">  
        <link rel="stylesheet" type="text/css" media="print" href="assets/print.css">	
   </head>
    <body>
        <?php include 'assets/header.html'; ?>
        <div class="grid grid-pad">
	        <div class="col-1-2">
		        <div class="content">
		            <h2>Welcome!</h2>
		            <img class="left" src="assets/images/ArchW.png">
                    <p class="justify">You've reached the site for the Arch Linux Women project. 
		            Arch Linux Women (Arch Women or A-W for short) is an all inclusive 
		            organization of Arch Linux enthusiasts with a focus on helping more
		            women become involved in the Arch Linux community and 
		            <abbr title="free open source software"> FOSS</abbr>. To do 
					this, we provide a safe space for people of all genders and 
					backgrounds to share skills, learn, network and socialize. 
					Anyone with an interest in our mission is welcome to
					participate.</p>
				</div>
	        </div>
	        <div class="col-1-2">
		        <div class="content">
                    <h2>Get Involved</h2>
		            <ul class="left">
						<li>
						    <a href="/join">Join</a>
			                <ul>
				                <li><a href=/join/#women">Women</a></li>
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
				                <li><a href="/redmine">Project Manager</a></li>
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
                    <h2>Projects</h2> 
				    <h3><a href="https://wiki.archlinux.org/index.php/Classroom">Classroom</a></h3>
					<p>Arch Linux Classroom is a project to develop and host 
                    teaching materials that can be used by the wider Arch Linux 
					community. Arch Women is hosting a package building class to 
                    help increase contributions to Arch Linux.</p>
                    <h3>Internship</h3>
                    <h3>Mentor Connection</h3>
                </div>
            </div>
            <?php
                include('inc/rss.php');
          
                $feedlist = new atom('https://archwomen.org/blog/feed.atom');
                echo '<div class="col-1-2"><div class="content">', $feedlist->display(4,"<h2>Blog</h2>"), '</div></div></div>';

                $feedlist = new rss('https://archwomen.org/calendar//rss/rss2.0.php?cal=&cpath=&rssview=month');
                echo '<div class="grid grid-pad"><div class="col-1-2"><div class="content">', $feedlist->display(4,"<h2>Upcoming Events</h2>"), '</div></div>';

                $feedlist = new atom('https://archwomen.org/news/?type=atom10');
                echo '<divclass="col-1-2"><div class="content">', $feedlist->display(4,"<h2>Community News</h2>"), '</div></div></div>';
            ?>
        <?php include 'assets/footer.html'; ?>
    </body>
</html>
