<?php
    session_start();
    /*The requires are used to generate the templates as well as connect to the database
    These are not stored in the public directory as they user should not be able to directly access these*/
    $title = 'Northampton News';
    require '../databaseJoin.php';
    require '../head.php';
    require '../nav.php';
	require  '../goBack.php';

?>
    <!--This file is used to generate a page for all the articles in the database,
     This is achieved by using links that have the article Id as an identifier, 
     please see index.php to see how this works-->
<article>

<?php
    /*the if statement and the prpare statement are used to select the correct article,
    the article Id from the URL is used to select the matching article within the database*/
    if (isset($_GET['articleId'])) {

        $selectArt = $pdo->prepare('SELECT * FROM article WHERE articleId= :articleId');
        $value = [
            'articleId' => $_GET['articleId']
        ];

        $selectArt -> execute($value);

        /*A foreach loop is used to select all the values from within the database record,
        these are then echo'd so they display on the page, a title is shown as well as a image,
        publis date, articles content and the category it resides in */
        foreach($selectArt->fetchAll() as $row) {
            echo '<h1>' . $row['title'] . '</h1>' ;
            //a image width and height is added to ensure the image does not overload the template boundaries
            echo '<image src="images/articles/' . $row['imageName'] . '" width = 800px height = 500px >';
            echo '<em>Publish Date: ' .$row['publishDate'] . '</em>';
            echo '<p>' .$row['content'] . '<p>';
            echo '<p>Category: ' .$row['categoryId'] . ' </p>';
        } 
    } 
    //used to provice a title to the comments section of the article  
    echo '<h3>Comments</h3>';
    
    //Below is used to look for comments that are linked to this article using the article Id
    if (isset($_GET['articleId'])) {

        $selectComm = $pdo->prepare('SELECT * FROM comment WHERE articleId= :articleId');
        $value = [
            'articleId' => $_GET['articleId']
        ];

        $selectComm -> execute($value);

        /*The foreach loop retrieves comments,
        Any comments on this article are displayed with the persons name who left that comment
        a hyperlink is also created that when clicked displays all comments by that user */
        foreach($selectComm->fetchAll() as $row) {
            echo '<p> Posted By: ' .  '<p><a class="articleLink" href="userComments.php?username=' . $row['username'] . '">'. $row['username'] . '</a></p>' ;
            echo '<p> Comment: ' .$row['commentContent'] . '<p>';
        }
    }

    //This if statment is used to make sure only users that are logged in can comment
    if(isset($_SESSION['loggedin'])) {

        /*when a logged in user presses submit the comment with its content is added to the article,
        If the article page is reloaded then the comment will be displayed underneath the article*/
        if (isset($_POST['submit'])) {
            $stmt = $pdo->prepare('INSERT INTO comment(username, commentContent, articleId) 
                                           VALUES(:username,:commentContent,:articleId)');
                $value = [
                    'username' => $_SESSION['loggedin'],
                    'commentContent' => $_POST['commentContent'],
                    'articleId' => $_GET['articleId']
                ];
            
                $stmt->execute($value);
                //this echo statment is to let the user know their comment has been added
                echo '<p> Your Comment Has Been Added </p>';  
        } 
        
        /*This else statement lets the user know that they can comment as they are logged in
        It also shows the empty form is the submit button has not been clicked*/
        else {
        echo '<p>You are Logged in and can now Comment</p>';
        echo '<form action="" method="POST">
                <label>Comment:</label>
                <textarea name = "commentContent" required> </textarea>
                <input type="submit" name="submit" value="Submit"/>
            </form>';
        }

    }
/*if the user is not logged in they get the below message at the bottom of the article 
this is to prompt them to login if they want to comment*/
 else {
     echo '<p>You Need To Be Logged In To Comment on a Article</p>';
 }
    require '../foot.php';
?>