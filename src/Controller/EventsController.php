<?php
    namespace App\Controller;
    use App\Controller\AppController;
    

class EventsController extends AppController
    {
    
        public function index($id = null)
        {
            $where = [];
          
            $where['id_user = '] = $this->request->session()->read('Auth.User.id');

           

            $resultsArray = $this->Events
            ->find()
            ->where($where)
            ->toList();
           
            $this->set('events', $resultsArray);
            $customer = $this->Events->newEntity();

            if ($this->request->is('post')) {
               
                // Prior to 3.4.0 $this->request->data() was used.
                $customer = $this->Events->patchEntity($customer, $this->request->getData());
                if ($this->Events->save($customer)) {
                    $this->Flash->success(__('Il cliente è stato aggiunto con successo.', ['key' => 'message']));
                    header("Refresh:0");
                }else{
                $this->Flash->error(__('Aggiunta Cliente fallita (Controlla se hai aggiunto tutti i campi).'));
                }
            }

          
        }

        public function deleteCustomer ($id = null){

            $where = [];
          
            $where['id = '] = $id;

            $resultsArray = $this->Events
            ->find()
            ->where($where)
            ->toList();

            $customer = $this->Events->newEntity();
            $customer = $this->Events->patchEntity($customer, $resultsArray);
            if ($this->Events->deleteAll((array('id'=>$id)))) {
                $this->Flash->success(__('Il cliente è stato eliminato con successo.', ['key' => 'message']));

            }else{
            $this->Flash->error(__('Eliminazione Cliente fallita'));
            }
            }

        
        
    
        public function detail($id = Null)
        {
            $where = [];
            $where['id_customer ='] = $id;
            $where['id_user = '] = $this->request->session()->read('Auth.User.id');
            

            $event = $this->Events->get($id);
            $this->set('event', $event);
           
            $controllerPets= new PetsController();

            $resultsArray = $controllerPets->Pets
            ->find()
            ->where($where)
            ->toList();
            
            $this->set('pets', $resultsArray);
            

            if ($this->request->is('post')) {
                
                
                $controllerPets->addPets($this->request->getData());
                
                return $this->redirect(['action' => 'detail', $id]);

            }
        }

        public function detailpets($id = Null)
        {
            
            $where = [];
                
                   $where['id ='] = $id;
                 
               
                    $where['id_user = '] = $this->request->session()->read('Auth.User.id');
                 

               
           
            $controllerPets= new PetsController();

            $resultsArray = $controllerPets->Pets
            ->find()
            ->where(['id =' => $id])
            ->toList();
            
            $this->set('infopets', $resultsArray);


        }

      
     
 
    }

?>