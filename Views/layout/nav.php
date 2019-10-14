<div class='bg-light'>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand font-weight-bold" href="index.php">Management Consulting Int</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="main.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=(isset($path))? $path : ''?>=about">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=(isset($path))? $path : ''?>=contact" tabindex="-1" aria-disabled="true">Contact</a>
                </li>
            </ul>


            <a href="<?=(isset($path))? $path : ''?>=all-announces" class='navbar-nav btn btn-warning px-3 py-3 mr-lg-3'>Consulter les annonces</a>


            <a href="<?=(isset($path))? $path : ''?>=login" class='navbar-nav btn btn-primary px-3 py-3'>Déposer une annonce</a>

        </div>
    </nav>
</div>