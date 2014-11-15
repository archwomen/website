# Main Arch Women website

This is the main website for the Arch Linux Women project hosted at
http://archwomen.org. The website is HTML5/CSS3 and built with PHP as the backend.

## Special Directories

###assets

This directory holds css files and images for the site. There is a special file
called template.txt that can be used to create new pages.

###inc

This directory has php files that are included in other php files

## Minifying Files

There are lots of libraries available for minifying css/javascript, the
following example uses yuicompressor on Arch Linux using the AUR pkg:

    yuicompressor screen.css -o screen.min.css

## WAI-ARIA labels and roles

Web Accessibility Initiative - Accessible Rich Internet Applications is a
specification that helps increase the accessibility of webpages to screen reader
users and those who cannot use pointing devices. The main website uses WAI-ARIA
roles on HTML elements. Further information is available at:
http://www.w3.org/TR/wai-aria-practices/
