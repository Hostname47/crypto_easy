<header>
    <div id="header-logo-container">
        <img src="assets/images/logos/large.png" id="header-logo" alt="">
    </div>
    <div class="header-inline-separator no-select">〡</div>
    <div id="header-search-container">
        <!-- action and method will be specified in js ajax request -->
        <form class="flex align-center">
            <input type="text" name="" id="header-search-input" placeholder="Search for a cypher .. EX: RSA">
            <div id="search-language-picker-container">
                <a href="" id="selected-language" class="button-with-suboption">PHP</a>
                <div class="suboptions-container suboptions-container-style-1">
                    <div class="flex align-center justify-arround" style="margin-bottom: 4px">
                        <p class="lang_subcont">Languages: </p>
                        <a href="" id="lang_subcont_see_all">See all</a>
                    </div>
                    <div class="option-style-1">
                        <img src="assets/images/languages/php.png" class="search-language-icon" alt="">
                        <div class="language-text">PHP</div>
                    </div>
                    <div class="option-style-1">
                        <img src="assets/images/languages/c.png" class="search-language-icon" alt="">
                        <div class="language-text">C</div>
                    </div>
                    <div class="option-style-1">
                        <img src="assets/images/languages/java.png" class="search-language-icon" alt="">
                        <div class="language-text">JAVA</div>
                    </div>
                    <div class="option-style-1">
                        <img src="assets/images/languages/csharp.png" class="search-language-icon" alt="">
                        <div class="language-text">C#</div>
                    </div>
                    <input type="hidden" id="lang_input_helper" value="php">
                </div>
            </div>
        </form>
    </div>

    <div id="header-menu-container">
        <a href="" class="header-menu-item">Home</a>
        <a href="" class="header-menu-item">About</a>
        <a href="" class="header-menu-item">Code Breaking</a>
        <a href="" class="header-menu-item">FAQ</a>
        <a href="" class="header-menu-item">Contact</a>
    </div>
</header>