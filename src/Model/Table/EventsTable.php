<?php 

namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Event\Event;
use Cake\ORM\Query;
use \ArrayObject;
use Cake\Validation\Validator;


class EventsTable extends Table
{
    
   /* public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('Nome', 'A username is required')
            ->notEmpty('Cognome', 'A password is required')
            ->notEmpty('Telefono', 'An email is required')
            ->notEmpty('CF', 'A name is required')
            ->notEmpty('Citta', 'A surname is required')
            ->notEmpty('Indirizzo', 'An address is required')
            ->notEmpty('Cap', 'A cap code is required')
            ->notEmpty('NamePets', 'A city is required');
    }*/


    public function beforeFind(Event $event, Query $query, ArrayObject $options)
    {
         $query->formatResults(function($results)
        {
            return $results->map(function($row)
            {
                if(isset($row['img']))
                {
                    $row['img'] = "data:image/jpeg;base64,".base64_encode(stream_get_contents($row['img']));
                    
                }
                if(isset($row['img1']))
                {
                    $row['img1'] = "data:image/jpeg;base64,".base64_encode(stream_get_contents($row['img1']));
                    
                }
                if(isset($row['img2']))
                {
                    $row['img2'] = "data:image/jpeg;base64,".base64_encode(stream_get_contents($row['img2']));
                    
                }
                if(isset($row['img3']))
                {
                    $row['img3'] = "data:image/jpeg;base64,".base64_encode(stream_get_contents($row['img3']));
                    
                }
                if(isset($row['img4']))
                {
                    $row['img4'] = "data:image/jpeg;base64,".base64_encode(stream_get_contents($row['img4']));
                    
                }
                return $row;
            });
        });
    }

    
}


?>