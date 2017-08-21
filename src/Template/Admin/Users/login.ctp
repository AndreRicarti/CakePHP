<!-- FORM HELPER -->
<div class="column content">

    <h3>Login</h3>

    <?php
    echo $this->Form->create();
    ?>

    <fieldset>
        <?php
        echo $this->form->input('email', [
            'placeholder' => 'Seu email aqui...',
            'data-validation' => 'http://seu-site.com/email/validation'
        ]);
        echo $this->Form->input('password', [
            'label' => 'Senha',
            'placeholder' => '******'
        ]);
        echo $this->Form->button('Sends');
        ?>
    </fieldset>

    <?php
    echo $this->Form->end();
    ?>

</div>