<header>
    <div class="left">
        <img src="assets/img/profile.avif" alt="Profile Image">
        <div class="text">
            <span id="name">Jose Britto Saaji</span>
            <span id="tagline">Developer. Developer. Developer</span>
        </div>
    </div>
    <div class="right">
        <nav>
            <a href="">Projects</a>
            <a href="">Blog</a>
            <a href="">About</a>
            <a href="">Contact</a>
        </nav>
    </div>
    <div class="right-mobile" id="right-mobile">
        <nav>
            <div id="mobile-menu-overlay">
                <a href="">Projects</a>
                <a href="">Blog</a>
                <a href="">About</a>
                <a href="">Contact</a>
            </div>
            <button id="mobile-menu" class="hamburger hamburger--spin" type="button"
                    aria-label="Menu" aria-controls="navigation" aria-expanded="false">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
            </button>
        </nav>
        <script>
            let menu = document.getElementById('mobile-menu');
            let overlay = document.getElementById('mobile-menu-overlay');
            menu.addEventListener('click', () => {
                menu.classList.toggle('is-active');
                overlay.classList.toggle('is-active');
                /* accessibility */
                let wasExpanded = menu.getAttribute('aria-expanded');
                if (wasExpanded === 'true') {
                    overlay.classList.add('non-active');
                    menu.setAttribute('aria-expanded', 'false');
                } else {
                    overlay.classList.remove('non-active');
                    menu.setAttribute('aria-expanded', 'true');
                }
            })
            let rightMobile = document.getElementById('right-mobile');
            window.addEventListener('click', function(e){
                if (!rightMobile.contains(e.target) && menu.getAttribute('aria-expanded') === 'true') {
                    if(menu.classList.contains('is-active')) {
                        menu.classList.toggle('is-active');
                        overlay.classList.toggle('is-active');
                        menu.setAttribute('aria-expanded', 'false');
                        overlay.classList.add('non-active');
                    }
                }
            });
        </script>
    </div>
</header>