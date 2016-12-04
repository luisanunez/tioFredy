<br>
<br>
<br>
<br>

<body style="padding: 0; margin: 0; font-family:Arial, Verdana;background-color:#fff;">
    <!-- use jssor.slider.min.js instead for release -->

    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Galería</h1>
                    
                </div>
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div>
 </section><!--/#title--> 

  <br>
  <br>
  <br>
  <center>
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;
        height: 456px; background: #191919; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 800px; height: 356px; overflow: hidden;">
            <div>
                <?=  $this->Html->image('galeria/1.jpg', ['alt' => 'Arequipa']);  ?>
              	<?=  $this->Html->image('galeria/thumb1.jpg', array('data-u' => 'thumb'), ['alt' => 'Arequipa']);  ?>
            </div>
            <div>
                
               	<?=  $this->Html->image('galeria/06.jpg', ['alt' => 'Arequipa']);  ?>
              	<?=  $this->Html->image('galeria/thumb6.jpg', array('data-u' => 'thumb'), ['alt' => 'Arequipa']);  ?>
            </div>
        
              <div>
                
               	<?=  $this->Html->image('galeria/08.jpg', ['alt' => 'Arequipa']);  ?>
              	<?=  $this->Html->image('galeria/thumb8.jpg', array('data-u' => 'thumb'), ['alt' => 'Arequipa']);  ?>
            </div>
        
              <div>
                
               	<?=  $this->Html->image('galeria/04.jpg', ['alt' => 'Arequipa']);  ?>
              	<?=  $this->Html->image('galeria/thumb4.jpg', array('data-u' => 'thumb'), ['alt' => 'Arequipa']);  ?>
            </div>
        
                  
            <div>
                
               	<?=  $this->Html->image('galeria/05.jpg', ['alt' => 'Arequipa']);  ?>
              	<?=  $this->Html->image('galeria/thumb5.jpg', array('data-u' => 'thumb'), ['alt' => 'Arequipa']);  ?>
            </div>
        
            <div>
                
               	<?=  $this->Html->image('galeria/2.jpg', ['alt' => 'Arequipa']);  ?>
              	<?=  $this->Html->image('galeria/thumb2.jpg', array('data-u' => 'thumb'), ['alt' => 'Arequipa']);  ?>
            </div>
        
            <div>
                
               	<?=  $this->Html->image('galeria/07.jpg', ['alt' => 'Arequipa']);  ?>
              	<?=  $this->Html->image('galeria/thumb7.jpg', array('data-u' => 'thumb'), ['alt' => 'Arequipa']);  ?>
            </div>
        
            <div>
                
               	<?=  $this->Html->image('galeria/03.jpg', ['alt' => 'Arequipa']);  ?>
              	<?=  $this->Html->image('galeria/thumb3.jpg', array('data-u' => 'thumb'), ['alt' => 'Arequipa']);  ?>
            </div>
        
            <div>
                
               	<?=  $this->Html->image('galeria/09.jpg', ['alt' => 'Arequipa']);  ?>
              	<?=  $this->Html->image('galeria/thumb9.jpg', array('data-u' => 'thumb'), ['alt' => 'Arequipa']);  ?>
            </div>
          <div>
                
               	<?=  $this->Html->image('galeria/0doble.jpg', ['alt' => 'Arequipa']);  ?>
              	<?=  $this->Html->image('galeria/thumb5.jpg', array('data-u' => 'thumb'), ['alt' => 'Arequipa']);  ?>
            </div>
        
        
          
        </div>
        
        <!--#region Arrow Navigator Skin Begin -->
               <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top: 158px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 158px; right: 8px">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <!--#region Thumbnail Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/help/thumbnail-navigator.html -->
        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: default;">
                <div u="prototype" class="p">
                    <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                    <div class=c></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!--#endregion Thumbnail Navigator Skin End -->
           <!-- Trigger -->
       <script>
            jssor_slider1_starter('slider1_container');
        </script>

    </div>
    </center>>
  <br>
  <br>
  <br>
    <!-- Jssor Slider End -->
</body>