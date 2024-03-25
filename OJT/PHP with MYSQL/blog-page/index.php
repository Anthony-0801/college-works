<?php 
require('new-connection.php'); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anthony A. Cabulang">
    <link rel="stylesheet" href="styles.css">
    <title>Blog Page</title>

</head>
<body>
<!-- If the user is logged in, it will update the header -->
<?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { ?>
    <section>
        <h1>Blog Page</h1>
            <div>
                <h3>Welcome, <?= $_SESSION['first_name'] ?>!</h3>
                <a href="process.php">Logout</a>
            </div>
    </section>
<?php   unset($_SESSION['errors']);
        } ?>

<!-- If the user is not logged in, it will display this header -->
<?php if(!isset($_SESSION['logged_in'])) { ?>
    <section>
        <h1>Welcome here!</h1>
            <div>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
            </div>
    </section>
<?php   unset($_SESSION['errors']);
        } ?>
    <table>
        <thead>
            <tr>
                <th>Blog</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, impedit itaque voluptates praesentium quia officia odio doloremque nulla temporibus exercitationem ex, fugit incidunt laborum animi quas suscipit aspernatur perferendis optio?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae quas illum odit cupiditate accusantium id expedita, iste ea veniam nobis minima non quod suscipit dolores, recusandae, aperiam nemo praesentium ratione.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem necessitatibus soluta fuga mollitia doloremque ea esse cum neque voluptate? Aliquam autem sed quis temporibus quos consectetur eos cum eligendi optio.
                </td>
            </tr>
        </tbody>
    </table>

<!-- If the user is logged in, display the review form -->
<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { ?>
    <table class="review">
        <thead>
            <tr>
                <th>Leave a Review</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <form action="process.php" method="POST">
                        <input type="hidden" name="action" value="review">
                        <textarea name="content" cols="120" rows="5" placeholder="Place your review here..." required></textarea>
                        <input type="submit" name="review" value="Post Review">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
<?php } ?>


<!-- If the user is not logged in, you cannot add a review in the review form -->
<?php if(!isset($_SESSION['logged_in'])) { ?>
    <table class="review">
    <thead>
        <tr>
            <th>Leave a Review</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <form>
                    <textarea cols="120" rows="5" placeholder="Please login to place review..."></textarea>
                </form>
            </td>
        </tr>
    </tbody>
    </table>
<?php   } ?>

<!-- If the user is logged in or not still display the reviews --> 
<?php
// Fetch all reviews ordered by created_at
$reviews = fetch_all("SELECT * FROM reviews ORDER BY created_at DESC;");

foreach ($reviews as $review) {
    // Fetch user details for each review
    $user_query = "SELECT first_name, last_name FROM users WHERE id = '{$review['user_id']}'";
    $user = fetch_record($user_query);

    if ($user) {
        $first_name = $user['first_name'];
        $last_name = $user['last_name'];
    } else {
        // Handle case where user is not found (optional)
        $first_name = 'Unknown';
        $last_name = 'User';
    }
?>
    <table class="review">
        <thead>
            <tr>
                <th><?= $first_name ?> <?= $last_name ?> - <?= $review['created_at'] ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= isset($review['content']) ? $review['content'] : '' ?></td>
            </tr>

<!-- If the user is logged in, display the reply form -->
<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { ?>
            <tr>
                <td>
                    <form action="process.php" method="POST">
                        <input type="hidden" name="action" value="reply">
                        <input type="hidden" name="review_id" value="<?= $review['id'] ?>">
                        <textarea name="content" cols="120" rows="5" placeholder="Place your reply here..." required></textarea>
                        <input type="submit" name="reply" value="Post Reply">
                    </form>
                </td>
            </tr>
<?php } ?>

        </tbody>
    </table>

    <!-- Display replies for this review -->
<?php
    $replies_query = "SELECT * FROM replies WHERE review_id = '{$review['id']}' ORDER BY created_at ASC";
    $replies = fetch_all($replies_query);

    foreach ($replies as $reply) {
        // Fetch user details for each reply
        $reply_user_query = "SELECT first_name, last_name FROM users WHERE id = '{$reply['user_id']}'";
        $reply_user = fetch_record($reply_user_query);

        if ($reply_user) {
            $reply_first_name = $reply_user['first_name'];
            $reply_last_name = $reply_user['last_name'];
        } else {
            // Handle case where user is not found (optional)
            $reply_first_name = 'Unknown';
            $reply_last_name = 'User';
        }
?>
        <table class="reply">
            <thead>
                <tr>
                    <th><?= $reply_first_name ?> <?= $reply_last_name ?> - <?= $reply['created_at'] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= isset($reply['content']) ? $reply['content'] : '' ?></td>
                </tr>
            </tbody>
        </table>
<?php } ?>
<?php } ?>

</body>
</html>