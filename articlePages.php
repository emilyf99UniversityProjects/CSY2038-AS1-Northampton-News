<?php
    session_start();
    $title = 'Northampton News';
    require '../databaseJoin.php';
    require '../head.php';
    require '../nav.php';
	require  '../goBack.php';

?>

<article>

<?php
    if (isset($_GET['articleId'])) {

        $selectArt = $pdo->prepare('SELECT * FROM article WHERE articleId= :articleId');
        $value = [
            'articleId' => $_GET['articleId']
        ];

        $selectArt -> execute($value);

        foreach($selectArt->fetchAll() as $row) {
            echo '<h1>' . $row['title'] . '</h1>' ;
            echo '<image src="images/articles/' . $row['imageName'] . '" width = 800px height = 500px >';
            echo '<em>Publish Date: ' .$row['publishDate'] . '</em>';
            echo '<p>' .$row['content'] . '<p>';
            echo '<p>Category: ' .$row['categoryId'] . ' </p>';
        } 
       } ?>

<h3>Comments</h3>
<?php
       if (isset($_GET['articleId'])) {

        $selectComm = $pdo->prepare('SELECT * FROM comment WHERE articleId= :articleId');
        $value = [
            'articleId' => $_GET['articleId']
        ];

        $selectComm -> execute($value);

        foreach($selectComm->fetchAll() as $row) {
            echo '<p> Posted By: ' .  '<p><a class="articleLink" href="userComments.php?username=' . $row['username'] . '">'. $row['username'] . '</a></p>' ;
            echo '<p> Comment: ' .$row['commentContent'] . '<p>';
        }
       }

 if(isset($_SESSION['loggedin']) || isset($_SESSION['adminloggedin'])) {

    if (isset($_POST['submit'])) {
        $stmt = $pdo->prepare('INSERT INTO comment(username, commentContent, articleId) 
                                           VALUES(:username,:commentContent,:articleId)');
        if(isset($_SESSION['loggedin'])) {
            $value = [
                'username' => $_SESSION['loggedin'],
                'commentContent' => $_POST['commentContent'],
                'articleId' => $_GET['articleId']
                ];
            
                $stmt->execute($value);
                echo '<p> Your Comment Has Been Added </p>';  
        }
        
    } 
    else {
    echo '<p>You are Logged in and can now Comment</p>';
    echo '<form action="" method="POST">
            <label>Comment:</label>
            <textarea name = "commentContent" required> </textarea>
            <input type="submit" name="submit" value="Submit"/>
          </form>';
    }

}

 else {
     echo '<p>You Need To Be Logged In To Comment on a Article</p>';
 }
?>

<!-- comment form -->

<?php
    require '../foot.php';
?>