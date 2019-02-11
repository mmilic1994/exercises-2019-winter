<?php

require_once 'lib/DBBlackbox.php';
require_once 'Comment.php';

// your code here
$comment = new Comment;

if ($_POST) {
    // var_dump($_POST);

    $comment->fillFromArray($_POST);

    $comment->save();

    // redirect
    header("Refresh: 0");
    exit();
}

// select all saved posts
$all_comments_as_arrays = select();

$comments = [];
foreach ($all_comments_as_arrays as $comment_as_array) {
    $new_comment = new Comment;
    $new_comment->fillFromArray($comment_as_array);
    $comments[] = $new_comment;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disney buys Star Wars maker Lucasfilm from George Lucas | BBC News</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <article>

        <div class="img">
            <img src="img/article.jpg" alt="Disney buys Star Wars maker Lucasfilm from George Lucas">
        </div>
        
        <h1>Disney buys Star Wars maker Lucasfilm from George Lucas</h1>

        <p class="story">Disney is buying Lucasfilm, the company behind the Star Wars films, from its chairman and founder George Lucas for $4.05bn (£2.5bn).</p>

        <p>Mr Lucas said: "It's now time for me to pass Star Wars on to a new generation of film-makers."</p>

        <p>In a statement announcing the purchase, Disney said it planned to release a new Star Wars film, episode seven, in 2015.</p>

        <p>That will be followed by episodes eight and nine and then one new movie every two or three years, the company said.</p>

    </article>

    <div class="comments">
        <h2>Comment below:</h2>

        <!-- your code here -->
        <form action="" method="post">
        
            <label for="">Author:</label><br>
            <input type="text" name="author" value="<?= htmlspecialchars($comment->author) ?>"><br>
            <br>
            <label for="">Text:</label><br>
            <textarea name="text" id="" cols="30" rows="10"><?= htmlspecialchars($comment->text) ?></textarea><br>
            <br>
            <input type="submit" value="Post comment">
            <br> <br> <br> <br> <br>
        
        </form>

        <?php foreach ($comments as $comment) : ?>

            <div class="comment">
                <div class="author"><?= htmlspecialchars($comment->author) ?></div>
                <div class="text"><?= htmlspecialchars($comment->text) ?></div>
                <div class="created_at"><?= htmlspecialchars($comment->getCreatedAt('l, j. n., G:i')) ?></div>
            </div>

        <?php endforeach; ?>
        
    </div>
    
</body>
</html>