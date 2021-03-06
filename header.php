<header class="header">
	<div class="header-top">
		<div class="container">
			<a href="index.php" class="brand-logo">
				<img class="ru-logo" src="images/logo-ru.png" alt="Трансметалл — оптовая торговля металлопрокатом">
				<img class="eng-logo" src="images/logo-en.png" alt="Transmetall — wholesale of rolled metall products">
			</a>
			<!-- при переключении на англ. язык добавить к тегу body класс "eng" -->
			<div class="lang-switcher pull-right">
				<a href="/ru" class="active">RU</a>
				<a href="/eng">ENG</a>
			</div>
			<div class="tel pull-right">
				<a href="tel:+79876543210"><svg class="phone-i"><use xlink:href="#phone-i"></use></svg>+7 (987) 654-32-10</a>
				<button type="button" class="btn-callback" data-toggle="modal" data-target="#modal-callback">Заказать обратный звонок</button>
			</div>
	   </div>
	   <button type="button" class="mob-search-btn search-btn"><span class="glyphicon glyphicon-search"></span></button>
   </div>
   <nav class="navbar">
   	<div class="container">
   		<button type="button" class="navbar-toggle collapsed toggle-menu menu-left push-body" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
   			<div class="icon"></div>
   		</button>
   		<div class="main-menu collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="navbar">
		   	<ul class="nav navbar-nav">
			   	<li class="nav-item active"><a href="inner.php">О компании</a></li>
			   	<li class="nav-item dropdown">
			   		<a href="inner.php" aria-haspopup="true" aria-expanded="false">Продукция<span class="caret"></span><label class="drop-icon" for="mm-1"><svg class="chevron-right"><use xlink:href="#chevron-right"></use></svg></label></a>
			   		<input type="checkbox" name="mm-1" id="mm-1">
			   		<ul class="dropdown-menu">
			   			<li class="nav-item"><a href="inner.php">Продукт 1</a></li>
			   			<li class="nav-item"><a href="inner.php">Продукт 2</a></li>
			   			<li class="nav-item"><a href="inner.php">Продукт очень длинный заголовок</a></li>
			   		</ul>
			   	</li>
			   	<li class="nav-item"><a href="inner.php">Услуги</a></li>
			   	<li class="nav-item"><a href="inner.php">Новости</a></li>
			   	<li class="nav-item"><a href="inner.php">Документы</a></li>
			   	<li class="nav-item"><a href="inner.php">Партнеры</a></li>
			   	<li class="nav-item"><a href="inner.php">Контакты</a></li>
			   	<li class="nav-item"><button type="button" class="search-btn"><span class="glyphicon glyphicon-search"></span></button></li>
		   	</ul>
	   	</div>
   	</div>
   </nav>
   <div class="search-header">
   	<div class="container">
			<form action="/search" class="search-bar" role="search">
				<input type="search" name="q" placeholder="ПОИСК" class="input-field" aria-label="Поиск по сайту">
				<button type="submit" class="search-btn pull-right"><svg class="search-i"><use xlink:href="#search-i"></use></svg></button>
			</form>
		</div>
	</div>
</header>