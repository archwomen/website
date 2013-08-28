<!DOCTYPE html>
<html>
    <head>
        <title>Arch Linux Women | Contact</title>
        <meta name="description" content="Organizational website for Arch Women">
        <meta name="author" content="Arch Women">
        <meta name="keywords" lang="en-us" content="linux, arch linux, women, arch women, technology, programming, feminism">
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width,initial-scale=1">
        
		<link rel="stylesheet" type="text/css" media"all" href="/assets/normalize.css">
		<link rel="stylesheet" type="text/css" media="screen" href="/assets/screen.css">
        <link rel="stylesheet" type="text/css" media="print" href=/assets/print.css">
    </head>
    <body>
        <?php include '../assets/header.html'; ?>
        <article>
		    <h2>Contact</h2>
                    <form method="post" action="email.php">
                    Email: <input name="email" id="email" type="text" /><br />

                    Message:<br />
                    <textarea name="message" id="message" rows="15" cols="40"></textarea><br />

                    <input type="submit" value="Submit" />
                    </form>
        </article>	    
        <?php include '../assets/footer.html'; ?>
    </body>
</html>
