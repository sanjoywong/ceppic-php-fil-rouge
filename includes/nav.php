<?php
    session_start();
   echo $_session['loginUser'];
if (isset($_session['loginUser'])) {
   ?>
   <div class="logout">
   <li><a href=index.php?page=logout">logout</a></li>
   </div>
<?php }

else echo 'je suis piqpia';
?>

<header>
    <nav>
        <ul style="list-style-type: none;">
            <li>
                <a href="index.php?page=accueil" target="_blank" rel="noopener noreferrer" >Accueil</a>
            </li>
            <li><a href="index.php?page=contact">contact</a></li>
            <li><a href="index.php?page=inscription">inscription</a></li>
            <li><a href="index.php?page=login">login</a></li>
            <li><a href=index.php?page=logout">logout</a></li>
        </ul>
    </nav>
</header>