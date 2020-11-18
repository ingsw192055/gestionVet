<?php namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class PetsController extends AppController
{
   
    public function addPets($pets)
    {
        $pet = $this->Pets->newEntity();
        if ($this->request->is('post')) {
            // Prior to 3.4.0 $this->request->data() was used.
            $pet = $this->Pets->patchEntity($pet, $pets);
            if ($this->Pets->save($pet)) {
                return $this->Flash->success(__('Pet Aggiunto con successo.', ['key' => 'message']));
            }
            $this->Flash->error(__('Aggiunta Pet fallita (Controlla se hai aggiunto tutti i campi).'));
        }
        $this->set('pets', $pet);
    }

    


 
    
}
?>