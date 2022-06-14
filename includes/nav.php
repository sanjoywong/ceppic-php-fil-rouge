<?php
 session_start();
?>

<header>
    <nav>
        <ul style="list-style-type: none;">
            <li>
                <a href="index.php?page=accueil" target="_blank" rel="noopener noreferrer">Accueil</a>
            </li>
            <li><a href="index.php?page=contact">contact</a></li>
            <?php if (isset($_SESSION['loginUser'])) { ?>
                <span class="login">
                    <li><a href="index.php?page=logout">logout</a></li>
                    <li><strong><?= $_SESSION['loginUser'] ?></strong></li>
                </span>
            <?php } else { ?>
                <li><a href="index.php?page=inscription">inscription</a></li>
                <li><a href="index.php?page=login">login</a></li>

            <?php } ?>
        </ul>
    </nav>
</header>