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
    <link rel="stylesheet" type="text/css" media="all" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/screen.css">
    <link rel="stylesheet" type="text/css" media="print" href="/assets/print.css">
  </head>
  <body>
  <header class="main">
    <a href="/"><img src="/assets/images/archwomen.png"></a>
    <nav class="main">
      <ul>
        <li<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME']))=="about") echo " id=\"currentpage\""; ?>><a href="/about">About</a></li>
        <li<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME']))=="join") echo " id=\"currentpage\""; ?>><a href="/join">Join</a></li>
        <li<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME']))=="contribute") echo " id=\"currentpage\""; ?>><a href="/contribute">Contribute</a></li>
        <li<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME']))=="community-standards") echo " id=\"currentpage\"";?>><a href="/community-standards">Community Standards</a></li>
        <li<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME']))=="blog") echo " id=\"currentpage\""; ?>><a href="/blog">Blog</a></li>
        <li<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME']))=="wiki") echo " id=\"currentpage\""; ?>><a href="/wiki/resources">Resources</a></li>
        <li<?php if (basename(dirname($_SERVER['SCRIPT_FILENAME']))=="contact") echo " id=\"currentpage\""; ?>><a href="/contact">Contact</a></li>
      </ul>
    </nav>
  </header>
