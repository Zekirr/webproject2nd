<header>
    <a href="index.php"><img id="logo" src="ressources/Noxus_logo.png" alt="logo"></a>
    <div>
        <nav>
            <ul class="nav_links">
                <li><a href="challengers.php">Challengers</a></li>
                <li><a href="champrotation.php">Rotation des champions</a></li>
            </ul>
        </nav>
        <select id="region" onchange="location = this.options[this.selectedIndex].value;">
            <option value="index.php?reg=euw" <?php if(isset($_COOKIE['region']) && $_COOKIE['region'] == 'euw'){echo 'selected';} ?>>EUW</option>
            <option value="index.php?reg=eune" <?php if(isset($_COOKIE['region']) && $_COOKIE['region'] == 'eune'){echo 'selected';} ?>>EUNE</option>
            <option value="index.php?reg=na" <?php if(isset($_COOKIE['region']) && $_COOKIE['region'] == 'na'){echo 'selected';} ?>>NA</option>
            <option value="index.php?reg=kr" <?php if(isset($_COOKIE['region']) && $_COOKIE['region'] == 'kr'){echo 'selected';} ?>>KR</option>
        </select>
    </div>
</header>
