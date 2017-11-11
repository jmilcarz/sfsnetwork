<nav class="desktop top" id="sitenav">
     <div id="searchbox">
          <div class="container">
               <div class="form">
                    <input type="text" placeholder="Szukaj..." id="searchboxfield"/>
                    <button type="submit" name="search" id="searchbtn"><i class="fa fa-search"></i></button>
               </div>
               <button id="searchboxclose"><i class="fa fa-close"></i></button>
          </div>
          <div id="searchresults"><a class="btn" href="">Pokaż wyniki na oddzielnej stronie</a>
               <div class="grid">
                    <div class="user"><img src="<?php echo $user['profileimg']; ?>"/>
                         <div class="about">
                              <h2 class="name"><?php echo $userFullName; ?></h2>
                              <div class="info"><a class="btn btn-follow" href=""><i class="fa fa-leaf"></i>Obserwuj</a><a class="btn btn-send-message" href=""><i class="fa fa-comment"></i>Wyślij wiadomość</a></div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="container" id="undersearchbox">
          <ul class="links">
               <li class="first"><a href="index.php">Timeline</a></li>
               <li><a href="profile.php?id=<?php echo $user['id']; ?>">Profil</a></li>
               <li class="last"><a href="messages.php">Wiadomosci</a></li>
          </ul>
          <a class="logo" href="index.php">
               <h1>SFS</h1>
          </a>
          <ul class="links">
               <li class="first"><a href="index.php"><i class="fa fa-feed"></i></a></li>
               <li><a href="notifications.php"><i class="fa fa-bell"></i></a></li>
               <li id="tooglesearchbox"><i class="fa fa-search"></i></li>
               <li class="last" id="toogleUserNavDropdown"><i class="fa fa-user"></i>
                    <ul id="nav-dropdown-user">
                         <li class="about">
                              <h1><?php echo $userFullName; ?></h1>
                              <h2>@<?php echo $user['username']; ?></h2>
                         </li>
                         <li><a href="profile.php?id=<?php echo $user['id']; ?>"><i class="fa fa-user-circle"></i>Profil</a></li>
                         <li><a href="index.php"><i class="fa fa-bolt"></i>Timeline</a></li>
                         <li><a href="followers.php?id=<?php echo $user['id']; ?>"><i class="fa fa-bullhorn"></i>Obserwowani</a></li>
                         <li><a href="popular.php"><i class="fa fa-star"></i>Popularne w tej chwili</a></li>
                         <li class="hr"></li>
                         <li><a href="helpcenter/index.php"><i class="fa fa-question-circle"></i>Centrum Pomocy</a></li>
                         <li><a href="settings.php"><i class="fa fa-cogs"></i>Ustawienia i Prywatność</a></li>
                         <li>
                              <form action="" method="post">
                                   <button type="submit" name="signoutbtn"><i class="fa fa-sign-out"></i> Wyloguj się</button>
                              </form>
                         </li>
                         <li class="hr"></li>
                         <li class="tooglemodes"><a id="toogleDarkThemeDesktop"><i class="fa fa-lightbulb-o"></i>Dark Theme</a></li>
                    </ul>
               </li>
          </ul>
     </div>
</nav>

<nav class="mobile top" id="sitenav">
     <div id="searchbox-mobile">
          <div class="container">
               <div class="form">
                    <input type="text" placeholder="Szukaj..."/>
                    <button type="submit" name="search"><i class="fa fa-search"></i></button>
               </div>
               <button id="searchboxclose-mobile"><i class="fa fa-close"></i></button>
          </div>
          <div id="searchresults-mobile"><a class="btn" href="">Pokaż wyniki na oddzielnej stronie</a>
               <div class="grid">
                    <div class="user"><img src="<?php echo $user['profileimg']; ?>"/>
                         <div class="about">
                              <h2 class="name"><?php echo $userFullName; ?></h2>
                              <div class="info">
                                   <a class="btn btn-follow" href="">
                                        <i class="fa fa-leaf"></i>Obserwuj
                                   </a>
                                   <a class="btn btn-send-message" href="">
                                        <i class="fa fa-comment"></i>Wyślij wiadomość
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="container" id="undersearchbox-mobile">
          <button id="toogleLeftSideNav">
               <img src="<?php echo $user['profileimg']; ?>"/>
          </button>
          <div class="logo">
               <h1>SFS</h1>
          </div>
          <button id="toogleMobileNewPost"><i class="fa fa-leaf"></i></button>
     </div>
     <div id="mobileNewPostModal">
          <header>
               <a href="">
                    <img src="<?php echo $user['profileimg']; ?>"/>
               </a>
               <h1>Nowy Post</h1>
               <button id="closeMobileNewPost">anuluj<i class="fa fa-close"></i></button>
          </header>
          <form action="" method="post">
               <textarea id="newpostPostBody" name="postbody" placeholder="Napisz coś..."></textarea>
               <input id="newpostPostImg" type="file" name="postimg"/><img src="" id="newpostDesktopImg"/>
               <button class="btn" id="newpostPostSubmitBtn" type="submit" name="sendpost">
                    <i class="fa fa-bolt"></i>wyślij
               </button>
          </form>
     </div>
</nav>
<nav class="mobile bottom" id="sitenav">
     <div class="container">
          <a href="index.php"><i class="fa fa-feed"></i></a>
          <a id="tooglesearchbox-mobile"><i class="fa fa-search"></i></a>
          <a href="notifications.php"><i class="fa fa-bell"></i></a>
          <a href="messages.php"><i class="fa fa-comments"></i></a>
     </div>
</nav>
<nav class="mobile left" id="sitenav">
     <div class="container">
          <header>
               <a href="">
                    <img src="<?php echo $user['profileimg']; ?>"/>
               </a>
               <button id="closeMobileLeftNav">
                    <i class="fa fa-close"></i>
               </button>
          </header>
          <div class="info">
               <h1><?php echo $userFullName ?></h1>
               <h2>@<?php echo $user['username']; ?></h2>
          </div>
          <ul class="links">
               <li><a href="index.php"><i class="fa fa-feed"></i>Timeline</a></li>
               <li><a href="profile.php?id=<?php echo $user['id'] ?>"><i class="fa fa-user-circle-o"></i>Profil</a></li>
               <li><a id="tooglesearchbox-mobile2"><i class="fa fa-search"></i>Szukaj</a></li>
               <li><a href="popular.php?date=<?php echo date('m-y'); ?>"><i class="fa fa-bolt"></i>Popularne</a></li>
          </ul>
          <ul class="links">
               <li><a href="settings.php"><i class="fa fa-cogs"></i>Ustawienia i Prywatność</a></li>
               <li><a href="helpcenter/index.php"><i class="fa fa-question-circle"></i>Centrum Pomocy</a></li>
               <li><a href="logout.php"><i class="fa fa-sign-out"></i>Wyloguj się</a></li>
          </ul>
     </div>
</nav>
