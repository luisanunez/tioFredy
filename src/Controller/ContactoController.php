<?php
namespace App\Controller;

use App\Controller\AppController;

class ContactoController extends AppController
{
    public function index()
    {
        $this->loadModel('Contacts');
        $contact = $this->Contacts->newEntity();
        if($this->request->is('post'))
        {
            $contact = $this->Contacts->patchEntity($contact, $this->request->data);
            if($this->Contacts->save($contact))
            {
                $this->Flash->success('Tu datos de contacto han sido enviados satisfactoriamente.');
                return $this->redirect(['controller' => 'Contacto', 'action' => 'index']);
            }
            else
            {
                $this->Flash->error('Ups, hubo un error.');
            }
        }
        $this->set(compact('contact'));
    }
}
