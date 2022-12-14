<?php require('./partials/header.php'); ?>

<!-- HOME SECTION -->
<section id="home" class="d-flex justify-content-between p-5 homepage row">
    <div class="text-uppercase col-12 col-md-4">
        <h1>web developer</h1>
        <h2 class="montserrat">chaitas laurent</h2>
        <h3>ウェブ開発者</h3>
    </div>

    <div class="d-flex align-items-center col-12 col-md-4 div-logo">
        <img class="kyu" src="./assets/Images/kywbe_logo.png" alt="">
    </div>

    <div class="nav d-flex flex-column justify-content-between align-items-end col-12 col-md-4">
        <div>
            <h4>based in Lyon, France</h4>
        </div>
        <div>
            <h5>00_</h5>
            <div class="d-flex">
                <h3>リユウ</h3>
                <nav>
                    <ul>
                        <li><a class="under-link" href="#about">about</a></li>
                        <li><a class="under-link" href="#skills">skills</a></li>
                        <li><a class="under-link" href="#work">work</a></li>
                        <li><a class="under-link" href="#contact">contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="container mt500">
    <div class="row col-12">
        <div class="col-12 col-md-6 d-flex">
            <div class="me-3">
                <h3>わたし</h3>
            </div>
            <div class="position-relative col-6">
                <h2>Me, <br> myself <br> and I</h2>
                <p class="fst-italic">“If you want to know who you are, you have to look at your real self and
                    acknowledge what you see.”</p>
                <h5 class="position-absolute nums">01</h5>
            </div>
        </div>
        <div class="col-12 col-md-6 text-end">
            <h6>いち</h6>
        </div>
    </div>
    <div class="row col-12 pt-5 pb-5 reverse">
        <div class="col-12 col-md-6 d-flex flex-column justify-content-between pe-5">
            <p>
                Welcome on my portfolio ! I am Laurent, 23 years old and I am web developer. I was studying
                3D conception but I found my professional orientation in programming.
            </p>
            <p>
                Passionate with graphism for now few years, I discovered web developement and I realize that
                I found my way. That's why I choosed to become web developer and use my graphism sensibility
                in my code !
            </p>
            <ul class="d-flex justify-content-around ps-5 pe-5">
                <li class="under-link"><a href="https://github.com/Ryww0" target="_blank">Github</a></li>
                <li class="under-link"><a href="https://www.instagram.com/lau_chts/" target="_blank">Instagram</a>
                </li>
                <li class="under-link"><a href="https://www.linkedin.com/in/laurent-chaitas-891746158/" target="_blank">LinkedIn</a></li>
            </ul>
        </div>
        <div class="col-12 col-md-6 overflow-hidden h500 ps-5 d-flex justify-content-center">
            <img id="profil-pic" src="./assets/Images/laurent.jpg_large" alt="">
        </div>
    </div>
</section>

<!-- SKILLS SECTION -->
<section id="skills" class="container mt500">
    <div class="row col-12">
        <div class="col-12 col-md-6 d-flex">
            <div class="me-3">
                <h3>スキル</h3>
            </div>
            <div class="position-relative col-6">
                <h2>My <br> skills</h2>
                <p class="fst-italic">"If you can't fly, run. If you can't run, walk. If you can't walk, crawl, but
                    by all means, keep mooving."</p>
                <h5 class="position-absolute nums">02</h5>
            </div>
        </div>
        <div class="col-12 col-md-6 text-end">
            <h6>に</h6>
        </div>
    </div>
    <div class="row col-12 d-flex justify-content-between pt-5 pb-5">
        <div class="d-flex col-12 col-md-3">
            <div class="d-flex flex-row-reverse me-3">
                <h2 class="card-skills-title montserrat">front-end</h2>
                <h3>フロント エンド</h3>
            </div>
            <p>
                I am able to create graphic models thanks to softwares like Figma or Adobe XD, and embed it
                also using langages HTML, CSS and Javascript.
            </p>
        </div>
        <div class="d-flex col-12 col-md-3">
            <div class="d-flex flex-row-reverse me-3">
                <h2 class="card-skills-title montserrat">back-end</h2>
                <h3>バックエンド</h3>
            </div>
            <p>
                Using PHP, MySQL and PHP framework Symfony, I am able to create a website back-end respecting
                UML and SOLID rules.
            </p>
        </div>
        <div class="d-flex col-12 col-md-3">
            <div class="d-flex flex-row-reverse me-3">
                <h2 class="card-skills-title montserrat">graphism</h2>
                <h3>グラフィックデザイン</h3>
            </div>
            <p>
                I am familiar with graphic softwares, Illustrator, Procreate are some examples.
                I kinda love to think about which color match with wich color with chromatic circle to get the
                best visual website possible.
            </p>
        </div>
    </div>
</section>

<!-- WORK SECTION -->
<section id="work" class="container mt500">
    <div class="row col-12">
        <div class="col-12 col-md-6 d-flex">
            <div class="me-3">
                <h3>プロジェクト</h3>
            </div>
            <div class="position-relative col-6">
                <h2>My <br> projects</h2>
                <p class="fst-italic">"Set your heart ablaze."</p>
                <h5 class="position-absolute nums">03</h5>
            </div>
        </div>
        <div class="col-12 col-md-6 text-end">
            <h6>さん</h6>
        </div>
    </div>
    <div class="pt-5 pb-5">
        <!-- num is on right -->
        <div class="row col-12 d-flex justify-content-between mb-5">
            <div id="w1" class="row col-11 h50 outline d-flex align-items-center justify-content-between card-work-1">
                <div class="w-auto">
                    <h2>NotaResto</h2>
                </div>
                <div class="w-auto">
                    <ul class="work-details">
                        <li>_Symfony project</li>
                        <li>_Object-oriented programming</li>
                        <li>_CRUD</li>
                        <li>_AJAX methods</li>
                    </ul>
                </div>
            </div>
            <div class="row col-1 h50 br relative">
                <span class="pbr0">01</span>
            </div>
        </div>
        <!-- num is on left -->
        <div class="row col-12 d-flex justify-content-between mb-5">
            <div class="row col-1 h50 bl relative">
                <span class="pbl0">02</span>
            </div>
            <div id="w2" class="row col-11 h50 outline d-flex align-items-center justify-content-between flex-row-reverse card-work-1">
                <div class="w-auto">
                    <h2>Pokedex</h2>
                </div>
                <div class="w-auto">
                    <ul class="work-details">
                        <li>_Using API</li>
                        <li>_Javascript project</li>
                        <li>_CSS elabored design</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- num is on right -->
        <div class="row col-12 d-flex justify-content-between mb-5">
            <div id="w3" class="row col-11 h50 outline d-flex align-items-center justify-content-between card-work-1">
                <div class="w-auto">
                    <h2>Ace Bakery</h2>
                </div>
                <div class="w-auto">
                    <ul class="work-details">
                        <li>_Team working</li>
                        <li>_Dynamic page with JS</li>
                        <li>_graphic design</li>
                    </ul>
                </div>
            </div>
            <div class="row col-1 h50 br relative">
                <span class="pbr0">03</span>
            </div>
        </div>
    </div>
</section>

<!-- contact SECTION -->
<footer id="contact" class="container mt500 mb-5">
    <div class="col-12 col-md-6 d-flex">
        <div class="me-3">
            <h3>スキル</h3>
        </div>
        <div class="position-relative col-6">
            <h2>Contact <br> me</h2>
            <h5 class="position-absolute nums">04</h5>
        </div>
    </div>
    <div class="mt-5 d-flex align-item-center justify-content-center">
        <h2><a class="under-link" href="mailto:laurent.chaitas@gmail.com"><span class="big">Laurent.</span> <br>
                <span class="lil">Chaitas</span> <br> <span class="lessbig">@gmail.com</span></a></h2>
        <div>
            <ul class="d-flex justify-content-between ps-5 pe-5">
                <li class="under-link me-1 me-md-5"><a href="https://github.com/Ryww0" target="_blank">Github</a></li>
                <li class="under-link me-1 me-md-5"><a href="https://www.instagram.com/lau_chts/" target="_blank">Instagram</a></li>
                <li class="under-link me-1 me-md-5"><a href="https://www.linkedin.com/in/laurent-chaitas-891746158/" target="_blank">LinkedIn</a></li>
            </ul>
        </div>
    </div>

    <hr class="m-5">

    <div class="d-flex justify-content-center align-items-center flex-column">
        <span class="footer-text">Designed and developped by Ryww0 || Laurent Chaitas</span>
        <span class="footer-text">available on <a href="https://github.com/Ryww0/Ryww-Portfolio" target="_blank">GitHub</a></span>
    </div>
</footer>

<?php require('./partials/footer.php'); ?>