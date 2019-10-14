<?=ExtendsView::extend('header');?>
<?=ExtendsView::extend('nav');?>


<title>Management Consulting Int</title>

<section class='bg-primary py-5' id='search-section'>
    <div class='container'>
        <div class='row'>
            <form class="form-group col-10 offset-1 col-md-8 offset-md-2">
                <div class='row'>
                    <div class='col-md-8'>
                        <div class='row'>
                            <input class="form-control col-12 py-4" type="search" placeholder="Recherche" aria-label="Search">

                            <ul class='col-12 list-unstyled mt-5 bg-white d-none'>
                                <li>texte1</li>
                                <li>texte2</li>
                                <li>texte3</li>
                                <li>texte4</li>
                                <li>texte5</li>
                                <li>texte6</li>
                            </ul>
                        </div>
                    </div>

                    <button class="btn btn-outline-warning ml-md-2 mt-3 mt-md-0 text-white col-md-3" type="submit">Recherche</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section id='categories' class='py-5'>
    <div class='container py-5 '>
        <div class='row'>
            <a href="<?=(isset($path))? $path : ''?>=announces&category=emploi" class='col-md py-5 px-2 box1'>
                <div class='row'>
                    <h5 class="mx-auto text-center font-weight-bold">Récrutement</h5>
                </div>

            </a>

            <a href="<?=(isset($path))? $path : ''?>=announces&category=services" class='col-md py-5 px-2 bg-light ml-md-3 mx-lg-3 mt-4 mt-md-0 box2'>
                <div class='row  '>
                    <h5 class='mx-auto text-center'>Conseils</h5>
                </div>
            </a>

            <div class='w-100 d-none d-sm-block d-lg-none'></div>

            <a href="<?=(isset($path))? $path : ''?>=announces&category=cours-formation" class='col-md py-5 px-2 bg-light mt-4 mt-lg-0 box3'>
                <div class='row'>
                    <h5 class="mx-auto text-center">Audit & Formation</h5>
                </div>
            </a>

            <a href="<?=(isset($path))? $path : ''?>=announces&category=materiel-professionnel" class='col-md py-5 px-2 bg-light ml-md-3 mt-4 mt-lg-0 box4'>
                <div class='row'>
                    <h5 class='mx-auto text-center'>MATÉRIEL PROFESSIONNEL</h5>
                </div>
            </a>
        </div>

        <div class='row mt-4'>
            <a href="<?=(isset($path))? $path : ''?>=announces&category=achat-vente" class='col-md py-5 px-2 bg-light box5'>
                <div class='row '>
                    <h5 class="mx-auto text-center">Création de site web</h5>
                </div>
            </a>

            <a href="<?=(isset($path))? $path : ''?>=announces&category=immobilier" class='col-md py-5 px-2 bg-light ml-md-3 mx-lg-3 mt-4 mt-md-0 box6'>
                <div class='row  '>
                    <h5 class='mx-auto text-center'>Immobilier & Mobilier</h5>
                </div>
            </a>

            <div class='w-100 d-none d-sm-block d-lg-none'></div>

            <a href="<?=(isset($path))? $path : ''?>=announces&category=vehicules" class='col-md py-5 px-2 bg-light mt-4 mt-lg-0 box7'>
                <div class='row'>
                    <h5 class="mx-auto text-center">Véhicules</h5>
                </div>
            </a>

            <a href="<?=(isset($path))? $path : ''?>=announces&category=electronique-media" class='col-md py-5 px-2 bg-light ml-md-3 mt-4 mt-lg-0 box8'>
                <div class='row'>
                    <h5 class='mx-auto text-center'>Electronique-Média</h5>
                </div>
            </a>
        </div>
    </div>
</section>

<section class='pb-5'>
    <div class='container'>
        <div class='row my-4'>
            <h2 class=''>Annonces récentes</h2>
        </div>

        <div class="card-deck">
            <div class="card">
                <a href="<?=(isset($path))? $path : ''?>=show&id=1254789"><img src="https://via.placeholder.com/150" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title"><a href=''>Card title</a></h5>
                    <p class="card-text">Prix CFA</p>

                    <p class="card-text"><i class="fa fa-folder-open" aria-hidden="true"></i> <a href=''>Categorie</a></p>

                    <p class="card-text"><i class="fa fa-map-marker" aria-hidden="true"></i> <a href=''> Ville</a></p>

                    <p class="card-text"><?=$counter->number_views('1254789')?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?=time_ago('2019-10-9 12:52:36')?></small>
                </div>
            </div>
            <div class="card">
                <a href="<?=(isset($path))? $path : ''?>=show&id=12547"><img src="https://via.placeholder.com/150" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Prix</p>
                    <p class="card-text"><i class="fa fa-folder-open" aria-hidden="true"></i> Categorie</p>
                    <p class="card-text"><i class="fa fa-map-marker" aria-hidden="true"></i> <i class="fa fa-map-marker" aria-hidden="true"></i> Ville</p>
                    <p class="card-text"><?=$counter->number_views('12547')?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?=time_ago('2019-10-04 12:52:36')?></small>
                </div>
            </div>

            <div class='w-100 d-none d-sm-block d-lg-none'></div>

            <div class="card">
                <a href="<?=(isset($path))? $path : ''?>=show&id=125784"><img src="https://via.placeholder.com/150" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Prix</p>
                    <p class="card-text"><i class="fa fa-folder-open" aria-hidden="true"></i> Categorie</p>
                    <p class="card-text">Ville</p>
                    <p class="card-text"><?=$counter->number_views('125784')?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?=time_ago('2019-10-6 12:52:36')?></small>
                </div>
            </div>
            <div class="card">
                <a href="<?=(isset($path))? $path : ''?>=show&id=125484"><img src="https://via.placeholder.com/150" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Prix</p>
                    <p class="card-text"><i class="fa fa-folder-open" aria-hidden="true"></i> Categorie</p>
                    <p class="card-text">Ville</p>
                    <p class="card-text"><?=$counter->number_views('125484')?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?=time_ago('2019-10-2 12:52:36')?></small>
                </div>
            </div>
        </div>
    </div>
</section>

<?=ExtendsView::extend('footer');?>


<script src="js/main.js"></script>

