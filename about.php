<section class="about" id="about">
    <div class="container">
        <div class="left">
            <h2>Who am I?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="right">
            <img height="480" src="assets/img/me.webp" alt="A headshot of me">
        </div>
    </div>

    <button id="projects-btn" class="explore">
        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="24px"><path d="M440-800v487L216-537l-56 57 320 320 320-320-56-57-224 224v-487h-80Z"/></svg>
    </button>

    <script>
        let btn = document.getElementById('projects-btn');
        btn.addEventListener('click', () => {
            window.location.href = "#projects";
        })
    </script>
</section>