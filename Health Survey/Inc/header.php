<header>
    <div class="layer"></div>
    <div class="container banner-size">
        <img class="header-logo" src="assets/images/logo_n.svg" width="250" height= "150" title= "Logo Co."/>
        <nav class="nav">
            <?php
                $menuItems = array(
                    array("/", "Home"),
                    array("/questions.php", "Form")
                );
                
                foreach ($menuItems as $item) {
                    echo "<a class='nav-link active' aria-current='page' href='$item[0]'>$item[1]</a>";
                }
                ?>
        </nav>
    </div>
</header>