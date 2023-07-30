<header id="header" class="clearfix container-fluid">
    <h1>@yield('page-title')</h1>
    <ul id="main-nav" class="nav">
        <li class="current"><a href="/">Главная</a></li>
        <li><a href="portfolio.html">Портфолио</a></li>
        <li><a href="project.html">Проекты</a></li>
        <li><a href="about.html">Обо мне</a></li>
        <li><a href="contact.php">Контакты</a></li>
        <li><a href="{{route('blog')}}">Мой блог</a></li>
    </ul>
</header>
