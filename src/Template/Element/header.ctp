<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand" >
                  <?php 
                  
                  echo $this->Html->link(
                       $this->Html->image("icon6.jpg",array('width'=>'400px'), ["alt" => "Logo"]),  array('controller'=>'Pages'),
                       
                        ['escape' => false]);
                  
                  ?>
                </div>
              
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                      <li><?php echo $this->Html->link(__('Inicio'), array('controller'=>'Pages')); ?></li>
                      <li><?php echo $this->Html->link(__('Servicios'), array('controller'=>'Servicios')); ?></li>
                      <li><?php echo $this->Html->link(__('Habitaciones'), array('controller'=>'Habitaciones')); ?></li>
                      <li><?php echo $this->Html->link(__('Galería'), array('controller'=>'Fotos')); ?></li>
                      <li><?php echo $this->Html->link(__('Arequipa'), array('controller'=>'Arequipa')); ?></li>
                      <li><?php echo $this->Html->link(__('Contacto'), array('controller'=>'Contacto')); ?></li>
                   
                  
                </ul>
            </div>
        </div>
    </header><!--/header-->
    
    
   