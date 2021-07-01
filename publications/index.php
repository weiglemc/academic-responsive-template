<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Weigle | All Publications</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Bootstrap -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="../js/jquery.tipsy.js"></script>
<script type="text/javascript" src="../js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
<link rel="stylesheet" type="text/css" href="../css/custom.css"/>
<link rel="stylesheet" type="text/css" href="../css/tipsy.css"/>
<link rel="stylesheet" type="text/css" href="../css/fancybox.css"/>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/menucollapse.js"></script>
<script type="text/javascript" src="../js/arrow78.js"></script><html>


<script language="JavaScript">
<!--
    function spiderjam(mym, myd){
        document.write("<a href=mailto:"	+ mym + "&#64;" + myd + ">" + mym + "&#64;" + myd + "</a>");
    }
-->
</script>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="glyphicon glyphicon-search"></span>
            </button>
            <button id="button2" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span><a href="../index.html"><img height="50" src="../images/odu-sig-noidea-fullcolor.png"/></a></span>
        </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                         <!--   <li class="page-scroll">
                                <a onclick="javascript:reset_menus();$('#tab-top-content').show();" href="#page-top">Top</a>
                            </li>
                        -->
                        <li class="page-scroll">
                            <a onclick="javascript:reset_menus();$('#tab-news-content').show();" href="../index.html#news">News</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Publications<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a onclick="javascript:reset_menus();$('#tab-publications-content').show();" href="../index.html#publications">Selected</a></li>
                                <li><a href="#">All</a></li>
                            </ul>
                        </li>
                        <li class="page-scroll">
                            <a onclick="javascript:reset_menus();$('#tab-awards-content').show();" href="../index.html#awards">Awards</a>
                        </li>
                        <li class="page-scroll">
                            <a href="talks/">Talks</a>
                        </li>
                        <li class="page-scroll">
                            <a onclick="javascript:reset_menus();$('#tab-courses-content').show();" href="../index.html#courses">Courses</a>
                        </li>
                        <li class="page-scroll">
                            <a onclick="javascript:reset_menus();$('#tab-service-content').show();" href="../index.html#service">Service</a>
                        </li>
                        <li class="page-scroll">
                            <a onclick="javascript:reset_menus();$('#tab-advising-content').show();" href="../index.html#advising">Advising</a>
                        </li>  
                        <li class="page-scroll">
                            <a onclick="javascript:reset_menus();$('#tab-bio-content').show();" href="../index.html#bio">Bio</a>
                        </li>                     
                        <li class="page-scroll">
                            <a onclick="javascript:reset_menus();$('#tab-contact-content').show();" href="../index.html#contact">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>

<section id="tree" style="margin-top:50px">
    <div class="container">
        <a href="../index.html">Weigle</a> > All Publications
    </div>
</section>

<!-- Home Section -->
<section id="home">
    <div class="container" id="publications">
    <br>
    <h1 align="CENTER">All Publications of Michele C. Weigle</h1>
    <br>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    /*
     Available Fields: 
     
     The field TYPE will be used for data-filtering. If it is not available then the item will be 
     marked as uncategorised.
     
     'note' 
     'abstract'
     'year'
     'group'
     'publisher'
     'location'
     'articleno'
     'numpages'
     'page-start'
     'page-end'
     'pages'
     'address'
     'url'
     'doi'
     'volume'
     'chapter'
     'journal'
     'author'
     'raw'
     'title'
     'booktitle'
     'folder'
     'type'
     'series'
     'linebegin'
     'lineend'
     'durl',
     'powerpoint',
     'infosite',
     'website'
     
     */
    
    /* 
     Define the format that will be used for printing each bibtex item.
     If a you desire to print a string infront of a field please use the following format:
     
     article = array("title", "author", "string", "bibtex field");
     
     eg.
     
     article = array("title", "author", "Num. Of pages", "pages");
     
     Please modify the example below as desired  is presented bellow. 
     */
    
    $article = array("title", "author", "journal", "series", "location", "publisher", "volume", "number", "pages", "address", "isbn", "year");
    $book = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $booklet = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $conference = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year", "award");
    $inbook = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $incollection = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "chapter", "pages", "address", "isbn", "year", "award");
    $inproceedings = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "chapter", "pages", "address", "isbn", "year", "award");
    $manual = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $mastersthesis = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $misc = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $phdthesis = array("title", "author", "journal", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $proceedings = array("booktitle", "series", "author", "location", "publisher", "volume", "pages", "address", "isbn", "year", "award");
    $techreport = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $unpublished = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    $other = array("title", "author", "booktitle", "series", "location", "publisher", "volume", "pages", "address", "isbn", "year");
    
    /* 
     Delimiter for Seperating each bibtex field
     */
    
    $delimiter = '.';
    
    /*
     
     Enter fields equivalent to type field in the BibTex file to sort the bibtex entries in categories. Bellow each type enter the title which will be presented as the category title.
     
     */
    
    $sortby = array('journal', 'conference', 'book', 'editorial', 'theses', 'gconferences');
    $sortbyTitle = array('Journals and Magazines', 'Conference Proceedings', 'Book Chapters', 'Editorials','Theses', 'Greek Conferences');
   
    $projects = array('all');
    include 'bibtex.php';				
   
   /* 
     Enter the location of your BibTex file
    */
    $bibTexFile = 'demo.bib';
    
    $bibTex = new BibTeX_Parser();
    $bibTex->parser($file = $bibTexFile); 
    ?>
</body>
</html>
