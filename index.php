<?php require_once("./app/init.php");?>
<!DOCTYPE html>
<html lang="<?php echo $system_lang; ?>">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title><?php echo $system_name; ?></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
     <link rel="stylesheet" href="./assets/css/styles.css">
     <script src="assets/js/jquery.js"></script>
</head>
<body>
     <?php require_once('./modules/nav.inc.php'); ?>
     <div id="main-container">
          <div class="container">
               <div class="grid" id="timeline">
                    <div class="info column">
                         <div class="about">
                              <header>
                                   <img class="grat-bg" src="<?php echo $user['backgroundimg']; ?>"/>
                                   <img class="profile-img" src="<?php echo $user['profileimg']; ?>"/>
                              </header>
                              <div class="box">
                                   <h1><?php echo $userFullName; ?></h1>
                                   <h2>@<?php echo $user['username']; ?></h2>
                              </div>
                         </div>
                         <div class="you-can-like-it">
                              <h1 class="more-space">Trendy dla Ciebie</h1>
                              <ul>
                                   <li><a href="">#dom</a></li>
                                   <li><a href="">#piatek</a></li>
                                   <li><a href="">#weekend</a></li>
                                   <li><a href="">#wallstreet</a></li>
                                   <li><a href="">#uncleben</a></li>
                              </ul>
                         </div>
                         <div class="you-can-like-it">
                              <h1>Warci obserwowania</h1>
                              <ul>
                                   <li>
                                        <a href="">
                                             <div class="grid">
                                                  <img src="https://unzippedtv.com/wp-content/uploads/sites/28/2016/01/prac-girl-2.jpg"/>
                                                  <div class="info">
                                                       <h1>Ola Wieszak</h1>
                                                       <h2>@olacia143</h2>
                                                  </div>
                                             </div>
                                        </a>
                                   </li>
                                   <li>
                                        <a href="">
                                             <div class="grid">
                                                  <img src="https://unzippedtv.com/wp-content/uploads/sites/28/2016/01/prac-girl-2.jpg"/>
                                                  <div class="info">
                                                       <h1>Ola Wieszak</h1>
                                                       <h2>@olacia143</h2>
                                                  </div>
                                             </div>
                                        </a>
                                   </li>
                                   <li>
                                        <a href="">
                                             <div class="grid">
                                                  <img src="https://unzippedtv.com/wp-content/uploads/sites/28/2016/01/prac-girl-2.jpg"/>
                                                  <div class="info">
                                                       <h1>Ola Wieszak</h1>
                                                       <h2>@olacia143</h2>
                                                  </div>
                                             </div>
                                        </a>
                                   </li>
                                   <li>
                                        <a href="">
                                             <div class="grid">
                                                  <img src="https://unzippedtv.com/wp-content/uploads/sites/28/2016/01/prac-girl-2.jpg"/>
                                                  <div class="info">
                                                       <h1>Ola Wieszak</h1>
                                                       <h2>@olacia143</h2>
                                                  </div>
                                             </div>
                                        </a>
                                   </li>
                                   <li>
                                        <a href="">
                                             <div class="grid">
                                                  <img src="https://unzippedtv.com/wp-content/uploads/sites/28/2016/01/prac-girl-2.jpg"/>
                                                  <div class="info">
                                                       <h1>Ola Wieszak</h1>
                                                       <h2>@olacia143</h2>
                                                  </div>
                                             </div>
                                        </a>
                                   </li>
                              </ul>
                         </div>
                    </div>
                    <div class="post column">
                         <header>
                              <button id="newPostModalDesktop">Napisz coś ciekawego...<i class="fa fa-leaf"></i></button>
                              <div class="modal new-post" id="newpostmodalddesktop">
                                   <header>
                                        <h1>Nowy Post</h1>
                                        <button id="closeNewPostModalDesktop">anuluj<i class="fa fa-close"></i></button>
                                   </header>
                                   <div class="form">
                                        <textarea id="newpostPostBody" name="postbody" placeholder="Napisz coś..."></textarea>
                                        <input id="newpostPostImg" type="file" name="postimg"/><img src="" id="newpostDesktopImg"/>
                                        <button id="newpostPostSubmitBtn" type="submit" name="sendpost"><i class="fa fa-leaf"></i>Wyślij</button>
                                   </div>
                              </div>
                         </header>
                         <div class="posts" id="timelinePosts">
                         <?php
                              $followingposts = DB::query('SELECT posts.p_id, posts.post_body, posts.post_likes, posts.post_comments, posts.post_date, users.`username`, users.`firstname`, users.`lastname`, users.`profileimg`, users.`id` FROM users, posts, followers WHERE posts.post_user_id = followers.user_id AND users.id = posts.post_user_id AND follower_id = :userid ORDER BY posts.post_date DESC', [':userid'=>$userid]);
                              foreach($followingposts as $post) {
                         ?>
                         <div class="post">
                              <script>
                                   $("#commentscloser<?php $post['p_id']; ?>").click(function() {
                                        $("#commentscloser<?php $post['p_id']; ?>").parent().parent().removeClass("show");
                                   });
                              </script>
                              <div class="row info">
                                   <img src="<?php echo $post['profileimg']; ?>"/>
                                   <div class="about">
                                        <a class="names" href="profile.php?id=<?php echo $post['id']; ?>">
                                             <h1><?php echo $post['firstname'] . " " . $post['lastname']; ?></h1>
                                             <h2>@<?php echo $post['username']; ?></h2>
                                        </a>
                                        <div class="date">
                                             <p><i class="fa fa-clock-o"></i><?php echo $post['post_date']; ?></p>
                                        </div>
                                   </div>
                              </div>
                              <div class="row content">
                                   <p><?php echo nl2br($post['post_body']); ?></p>
                              </div>
                              <div class="row stuff">
                                   <div class="delete" id="deletepost<?php echo $post['p_id']; ?>">
                                        <i class="fa fa-close"></i>usuń
                                   </div>
                                   <div class="likes">
                                        <i class="fa fa-heart"></i><?php echo $post['post_likes']; ?>
                                   </div>
                                   <div class="comments">
                                        <i class="fa fa-comments"></i><?php echo $post['post_comments']; ?>
                                   </div>
                                   <div class="comments-modal">
                                        <header>
                                             <h1 class="com-title">Komentarze</h1>
                                             <button id="commentscloser<?php echo $post['p_id']; ?>">zamknij<i class="fa fa-close"></i></button>
                                        </header>
                                        <div class="all-comments">
                                             <?php
                                                  $commentstopost = DB::query('SELECT posts.p_id, comments.comment_body, comments.comment_date, users.`username`, users.`firstname`, users.`lastname`, users.`profileimg`, users.`id` FROM comments, users, posts
                                                       WHERE comments.comment_post_id = posts.p_id AND comments.comment_user_id = :cu_id AND users.id = :userid', [':cu_id'=>$post['id'], ':userid'=>$post['id']]);
                                                  foreach ($commentstopost as $comment) {
                                             ?>
                                             <div class="comment">
                                                  <img src="<?php echo $comment['profileimg']; ?>"/>
                                                  <div class="info">
                                                       <div class="names">
                                                            <h1><?php echo $comment['firstname'] . " " . $comment['lastname']; ?></h1>
                                                            <h2>@<?php echo $comment['username']; ?></h2>
                                                       </div>
                                                       <div class="content">
                                                            <p><?php echo nl2br($comment['comment_body']); ?></p>
                                                       </div>
                                                  </div>
                                             </div>
                                             <?php } ?>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <?php } ?>
            <div class="other column"></div>
          </div>
     </div>

     <script src="assets/js/functions.js"></script>
</body>
</html>
