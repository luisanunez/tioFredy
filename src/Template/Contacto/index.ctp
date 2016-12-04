<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Contacto</h1>

            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>
</section>
<!--/#title-->

<section id="contact-page" class="container">

    <div class="row">
        <div class="col-sm-">

            <h4> Para reservar o tener mayor información sobre tarifas, promociones o servicios, por
   favor llene el formulario de contacto.</h4>
            
            <br>
            <h4>¡Contactenos aqui!</h4>
            <div class="status alert alert-success" style="display: none"></div>
            <?= $this->Form->create($contact) ?>

                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <?= $this->Form->input('first_name', ['class' => 'form-control', 'placeholder' => 'Nombre', 'label' => false, 'required'])  ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->input('last_name', ['class' => 'form-control', 'placeholder' => 'Apellido', 'label' => false, 'required'])  ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'Correo Electronico', 'label' => false, 'required'])  ?>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <?= $this->Form->textarea('message', ['class' => 'form-control', 'placeholder' => 'Mensaje', 'label' => false, 'required', 'row' => '8'])  ?>
                        </div>
                    </div>

                </div>
                <?= $this->Form->button('Enviar', ['class' => 'btn btn-default submit']) ?>
            <?= $this->Form->end() ?>
        </div>
        <!--/.col-sm-8-->
        <h6> *Toda información personal y de contacto permanecerá con carácter confidencial y será utilizada exclusivamente por Hospedaje Plaza de Yanahuara en conformidad con nuestra política de privacidad. </h6>
    </div>
</section>
<!--/#contact-page-->