<?= $this->Html->css('custom.min.css') ?>
<?= $this->Html->css('nprogress.css') ?>
<?= $this->Html->css('green.css') ?>
<?= $this->Html->css('bootstrap-progressbar-3.3.4.min.css') ?>
<?= $this->Html->css('pnotify.css') ?>
<?= $this->Html->css('pnotify.buttons.css') ?>
<?= $this->Html->css('pnotify.nonblock.css') ?>
  



<body>
 <div  class="login">
                <a class="hiddenanchor" id="signup"></a>
                <a class="hiddenanchor" id="signin"></a>

                <div class="login_wrapper">
                    <section class="login_content">
                            <?= $this->Flash->render('auth') ?>
                            <?= $this->Form->create() ?>
                                <h1>Welcome!</h1>
                                <div>
                                    <?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'Username', 'label' => false, 'required'])  ?>
                                </div>
                                <div>                                   
                                    <?= $this->Form->input('password', ['class' => 'form-control', 'placeholder' => 'Password', 'label' => false, 'required'])  ?>
                                </div>
                                <div>                                    
                                    
                                    <?= $this->Form->button('Log in', ['class' => 'btn btn-default submit']) ?>
                                    
                                    <a class="reset_pass" href="#">Lost your password?</a>
                                </div>

                                <div class="clearfix"></div>

                                <div class="separator">
                                    <div class="clearfix"></div>
                                    <br />

                                    <div>
                                        <h1><i class="fa fa-paw"></i>Hospedaje Cardenal de Yanahuara</h1>                                    
                                    </div>
                                </div>
                            <?= $this->Form->end() ?>
                        </section>
                    
               
                  
                  
                  
                  <!--/#Lo que esta aca abajo deberia estar aca?--> 
                  
            
                </div>
               </div>
 
        </body>