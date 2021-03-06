<section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/carrusel/palmeras.jpg)">
                  
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                 <div class="carousel-content center centered">
                                    <h2 class="boxed animation animated-item-1">CARDENAL DE YANAHUARA 
                                      <br>
                                      HOSPEDAJE</h2>
                                     <br>
                                    <p class="boxed animation animated-item-2">Usted se sentirá como en casa con nuestras habitaciones bien equipadas y la amabilidad de nuestro personal. </p>
                                    <br>
                                    <?= $this->Html->link('Contáctenos ahora', ['controller' => 'Contacto', 'action' => 'index'], ['class' => 'btn btn-md animation animated-item-3']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/carrusel/plaza1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content  centered">
                                    <h2 class="boxed animation animated-item-1"> Ubicados en la mejor zona de Arequipa </h2>
                                  <br>
                                    <p class="boxed animation animated-item-2">Céntrico para todo destino.</p>
                                    <br>
                                    <?= $this->Html->link('Ver Arequipa', ['controller' => 'Arequipa', 'action' => 'index'], ['class' => 'btn btn-md animation animated-item-3']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(img/carrusel/portada4.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="boxed animation animated-item-1">El mejor ambiente y servicio</h2>
                                    <br />
                                    <p class="boxed animation animated-item-2">Con nuestras instalaciones adecuada a todas tus necesidades.</p>
                                    <br />
                                    <?= $this->Html->link('Ver Galeria', ['controller' => 'Fotos', 'action' => 'index'], ['class' => 'btn btn-md animation animated-item-3']) ?>
                                    
                                </div>
                            </div>
                           <!-- <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="centered">
                                    <div class="embed-container">
                                        <iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->
