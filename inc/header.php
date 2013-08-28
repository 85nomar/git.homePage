<header>
    <div class="container">
        <div id="topBar">
            <div class="col-xs-3">
                <a href="index.php"><img width="205px" height="36px" alt="Online Auktion ricardo.ch" src="lib/img/logo.gif" id="logo"></a>
            </div>
            <div class="col-xs-9 text-right">

                <nav id="mainnav" class="pull-right">
                    <ul class="nav nav-pills noprint">
                        <li><a href="">My ricardo</a></li>
                        <li><a href="">Verkaufen</a></li>
                        <li><a href="">Anmelden</a></li>
                        <li class="dropdown" id="menuLogin">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
                            <div class="dropdown-menu pull-right well" id="login-dropdown">
                                <form>
                                    <p role="presentation" class="dropdown-header">Mit ricardo.ch - Benutzerangaben
                                        einloggen</p>
                                    <div class="form-group col-xs-12">
                                        <input class="form-control" data-val="true" data-val-required="Loggen Sie sich bitte ein." id="Username" name="Username" placeholder="Benutzername" type="text">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <input class="form-control" data-val="true" data-val-required="Bitte geben Sie Ihr Passwort ein." id="Password" name="Password" placeholder="Passwort" type="password">
                                    </div>
                                        <div class="col-xs-5">
                                            <button class="btn btn-trigger" type="submit">einloggen</button>
                                        </div>
                                        <div class="col-xs-7">
                                            <input type="checkbox"> Passwort merken
                                            <a href="#" target="_blank">Passwort vergessen?</a>
                                        </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="btn-group" id="language-picker">
                    <a class="btn btn-mousy btn-sm active" href="/de/Culture/Change?returnUrl=%2F">DE</a>
                    <a class="btn btn-mousy btn-sm " href="/fr/Culture/Change?returnUrl=%2F">FR</a>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="searchBar">
    <div class="container">

        <nav class="navbar-default" role="navigation">

            <div class="search-field col-xs-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Suchbegriff eingeben">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                            Alle Kategorien <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Cat 1</a></li>
                            <li><a href="#">Cat 2</a></li>
                            <li><a href="#">Cat 3</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <button type="button" class="btn btn-primary" tabindex="-1">Finden</button>
                    </div>
                </div><!-- /.input-group -->
            </div>
            <div id="advancedSearch">
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" data-toggle="dropdown">erweitert</a>
                    <div class="dropdown-menu">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">PLZ</span>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">KM</span>
                                    </div>
                                </div><!-- /.col-lg-12 -->
                                <ul class="nav">
                                    <li class="divider"></li>
                                    <li><a href="#">Filtersuche</a></li>
                                </ul>
                            </div><!-- /.row -->
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>