<html>
<head>
        <title>
                Hello World CMS Blog
                </title>
                <link rel="stylesheet" type="text/css" href="format.css" />
                <?php include 'header.php' ?>
                <?php include 'nav.php' ?>
            <a href="/index.php" >Home</a> |
            <a href="/post-submission.php">Submit A Post</a> |
            
          </nav> 
        </div>
          
          
          <body>
                        <div id="content">
                <main>
                        <form action="/action_page.php" method="get">
                            Title of Post: <input type="text" name="title"><br>
                            Author: <input type="text" name="author"><br>
                            Date: <input type="text" name="Date"><br>
                            <textarea rows="4" cols="50"> Type your blog post here!
                                    </textarea>
                            <input type="submit" value="Submit">
                          </form> 
                </main>
                </div>
        <?php include "footer.php" ?> 
</head>
</html>