<!DOCTYPE html>
<html>
  <head>
    <title>
      Arch Linux Women
      <?php
        if (isset($title)) {
          echo " | $title";
        }
      ?>
    </title>
    <meta charset="utf-8">
    <meta name="description" content="An organization that aims to increase female involvement in Arch Linux">
    <meta name="author" content="Arch Women">
    <meta name="keywords" lang="en-us" content="linux, arch linux, women, arch women, technology, programming, feminism">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">

    <meta property="og:type" content="website">
    <meta property="og:url" content="http://archwomen.org">
    <meta property="og:title" content="Arch Linux Women">
    <meta property="og:description" content="An organization that aims to increase female involvement in Arch Linux and free software.">
    <meta property="og:image" content="https://archwomen.org/assets/images/ArchW.png">

    <link rel="stylesheet" type="text/css" media="all" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/screen.min.css">
    <link rel="stylesheet" type="text/css" media="print" href="/assets/print.css">
  </head>
  <body>
  <header class="main" role="banner">
    <a href="/"><img alt="home" width="196" height="65" src="/assets/images/archwomen.png"></a>
    <nav class="main" role="navigation">
      <ul>
        <li<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME']))=="about") echo " id=\"currentpage\""; ?>><a href="/about">About</a></li>
        <li<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME']))=="community-standards") echo " id=\"currentpage\"";?>><a href="/community-standards">Community standards</a></li>
        <li<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME']))=="blog") echo " id=\"currentpage\""; ?>><a href="/blog">Blog</a></li>
        <li<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME']))=="wiki") echo " id=\"currentpage\""; ?>><a href="/wiki">Wiki</a></li>
        <li<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME']))=="contribute") echo " id=\"currentpage\""; ?>><a href="/contribute">Contribute</a></li>
        <li<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME']))=="contact") echo " id=\"currentpage\""; ?>><a href="/contact">Contact</a></li>
      </ul>
    </nav>
  </header>
