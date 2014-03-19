<?php if ($sf_user->hasFlash('contact_success')): ?>
    <div class="flash_notice span-24">
        <?php echo $sf_user->getFlash('contact_success') ?>
    </div>
<?php endif ?>
<div id="block1" class="span-24 backgroundcontainer <?php echo $contact->getUtmCampaign() ?> landing_v1">
    <div class="prepend-1 span-10 append-5 main-title">¡VENDE MÁS INMUEBLES!</div>
    <div class="form span-7">
        <div class="form-header">
            ¿Quieres saber más?
        </div>
        <form id="contact-form" method="post" action="<?php echo url_for('make_contact') ?>">
            <div class="form-fields">
                <?php if ($form->hasErrors()): ?>
                    <div class="error-message">Por favor, corrija los errores en el formulario</div>
                <?php endif; ?>
                <?php echo $form['name']->render(array('placeholder' => 'Nombre')) ?>
                <?php echo $form['email']->render(array('placeholder' => 'E-mail')) ?>
                <?php echo $form['phone']->render(array('placeholder' => 'Número Telefónico')) ?>
                <?php echo $form->renderHiddenFields() ?>
                <div class="form-submit">
                    <button class="submit" type="submit">HABLEMOS</button>
                </div>
            </div>
        </form>
    </div>
</div>