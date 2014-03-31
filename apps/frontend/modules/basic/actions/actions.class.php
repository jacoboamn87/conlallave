<?php

/**
 * basic actions.
 *
 * @package    conlallave
 * @subpackage basic
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class basicActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->contact = new Contact();
        
        $this->contact->setUtmCampaign( $request->getParameter('utm_campaign', 'landing_v1') );
        $this->contact->setUtmMedium( $request->getParameter('utm_medium', '') );
        $this->contact->setUtmSource( $request->getParameter('utm_source', '') );
        
        $this->form = new ContactForm($this->contact);
        
        if ( $request->isMethod( sfWebRequest::POST ) ) {
            $this->form->bind( $request->getParameter( $this->form->getName() ) );
             
            if ( $this->form->isValid() ) {
                $this->form->save();
                
                $values = $this->form->getValues();
                
                $message = $this->getMailer()->compose();
                                
                $message->setFrom('contactoconlallave@gmail.com', 'Landing page Inmobiliarias');
                $message->setTo('info@conlallave.com');
                $message->setSubject('Nuevo contacto en landing page');
                $message->setBody(<<<EOF
                    Nombre: {$values['name']}
                    Teléfono: {$values['phone']}
                    Correo: {$values['email']}
EOF
                );
                    
                $this->getMailer()->send($message, $failures);
                
                $this->getUser()->setFlash('contact_success', '¡Hemos registrado sus datos! Pronto nos pondremos en contacto');
                $this->redirect('homepage');
            }
        }
    }

}
