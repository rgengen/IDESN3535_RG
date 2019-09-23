<html>
<head>
        <title>
                Hello World CMS Blog
                </title>
                <link rel="stylesheet" type="text/css" href="format.css" />
                
                <?php include 'header.php' ?>
                <?php include 'nav.php' ?>
          <body>
                <div id="content">
<main>
                <?php function getPostTitlesFromDatabase() {//TODO in Module 4 //get this data from a database instead of hardcoding it $postTitles + array ("Blog Post 1", "Blog Post 2", "Blog Post 3"); return $postTitles;}?>

                        <ul>
                             <?php  $postTitles = getPostTitlesFromDatabase (); foreach ($postTitles as $postTitles) { echo "<li><a href='post.php?title='>". $postTitles. "</a></li>";}?>

                              </ul> 
                </main>
        </div> <!--close for content-->
        <?php include "footer.php" ?> 
                      </div>
</head>
</html>