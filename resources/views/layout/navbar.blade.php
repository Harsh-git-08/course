<header>
    <nav class="main-nav d-flex" id="main-nav">
        <div class="logo">
            <img src="https://www.globalindiatech.com/wp-content/uploads/2015/05/logo-design.png">
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="/home">Home</a></li>
            <li><a href="#solutions">Solutions</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#services">Services</a></li>

            <li><a href="{{ route('logout') }}" class="logout-button">Logout</a></li>
            <li><button class="join-button" href="#">Join</button></li>
        </ul>
    </nav>
    <nav class="languages" style="position:sticky;" id="pad-nav">
        <div class="lang-hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('language.html') }}" id="html">HTML</a></li>
            <li><a href="{{ route('language.css') }}">CSS</a></li>
            <li><a href="{{ route('language.js') }}">Javascript</a></li>
            <li><a href="{{ route('language.python') }}">Python</a></li>
            <li><a href="{{ route('language.php') }}">PHP</a></li>
            <li><a href="{{ route('language.laravel') }}">Laravel</a></li>
            <li><a href="{{ route('language.vizual') }}">DA</a></li>
            <li><a href="{{ route('language.ai') }}">AI</a></li>
        </ul>
        
    </nav>
    <nav class="languages" id="second-nav-padding">
        <div class="lang-hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('language.html') }}" id="html">HTML</a></li>
            <li><a href="{{ route('language.css') }}">CSS</a></li>
            <li><a href="{{ route('language.js') }}">Javascript</a></li>
            <li><a href="{{ route('language.python') }}">Python</a></li>
            <li><a href="{{ route('language.php') }}">PHP</a></li>
            <li><a href="{{ route('language.laravel') }}">Laravel</a></li>
            <li><a href="{{ route('language.vizual') }}">DA</a></li>
            <li><a href="{{ route('language.ai') }}">AI</a></li>
        </ul>
        
    </nav>
    <div class="cursor"></div>
    <div class="cursor2"></div>
    
</header>
<main>
    
</main>
<footer>
    <!-- place footer here -->
</footer>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
<!-- Your HTML content -->
<div id="content">
    <!-- Your data -->
</div>
<script>
   let hamburger = document.querySelector(".hamburger");
let langMenus = document.querySelectorAll(".lang-hamburger");
let navLinks = document.querySelectorAll(".nav-links");

hamburger.addEventListener('click', () => {
    // Toggle visibility of the main navigation menu
    navLinks[0].classList.toggle("open");
});

langMenus.forEach((langMenu, index) => {
    langMenu.addEventListener('click', () => {
        // Toggle visibility of the corresponding language menu
        navLinks[index + 1].classList.toggle("open");
    });
});


</script>
