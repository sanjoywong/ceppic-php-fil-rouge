<?php
 session_start();
?>

<header>
    <nav>
        <ul  style="list-style-type: none;">
            <li>
                <a href="index.php?page=accueil" target="_blank" rel="noopener noreferrer">Accueil</a>
            </li>
            <li><a href="index.php?page=contact">contact</a></li>
            <?php if (isset($_SESSION['loginUser'])) { ?>
                <span class="Login">
                    <li><a href="index.php?page=logout">logout</a></li>
                    <li><img src="./assets/img/user.png" alt="test the icon" srcset="" ></li>
                </span>
            <?php } else { ?>
                <li><a href="index.php?page=inscription">inscription</a></li>
                <li><a href="index.php?page=login">login</a></li>

            <?php } ?>
        </ul>
    </nav>
</header>