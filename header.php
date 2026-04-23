<header>
    <div class="header">
        <img id="title-image" src="Images/DataStock.jpg" alt="Terminal Showing Download. From: https://www.pexels.com/photo/colorful-lines-of-code-displayed-by-monitor-9464856/"> 
        <h1>Data Privacy Is A Right</h1>
    </div>
    <hr>
    <nav class="navbar">
        <a href="index.php" <?php if ($activePage === 'home') { echo 'class="active"'; } ?>>Home</a>
        <a href="about.php" <?php if ($activePage === 'about') { echo 'class="active"'; } ?>>About</a>
        <a href="resources.php" <?php if ($activePage === 'resources') { echo 'class="active"'; }?>>Resources</a>
        <a href="data_mirror_optin.php" <?php if ($activePage === 'interactive') { echo 'class="active"'; }?>>Watch It Happen</a>
        <a href="sources.php" <?php if ($activePage === 'sources') { echo 'class="active"'; }?>>Sources</a>
        <button id="theme-toggle" onclick="toggleTheme()" aria-label="Toggle dark mode">
            <span id="theme-icon"></span>
        </button>
    </nav>
</header>