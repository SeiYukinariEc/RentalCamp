<?php
namespace AlbumApi\Controller;

use AlbumApi\Controller\AbstractRestfulController;
use Common\Model\SampleQuery;
use Zend\View\Model\JsonModel;

class BookController extends AbstractRestfulJsonController
{

    public function __construct()
    {
        $a = 1;
    }

    public function getList()
    {   // Action used for GET requests without resource Id

        $apikey = $this->params()->fromHeader('apikey', null);

        $query = SampleQuery::create();
        $aaa = $query->find()->toArray();


//        $apikey->getFieldValue();

        return new JsonModel(
            $aaa
        );
    }

    public function get($id)
    {   // Action used for GET requests with resource Id
        $apikey = $this->params()->fromQuery();
        return new JsonModel(array("data" => array('id' => 2, 'name' => 'Coda', 'band' => 'Led Zeppelin')));
    }

    public function create($data)
    {   // Action used for POST requests
        return new JsonModel(array('data' => array('id' => 3, 'name' => 'New Album', 'band' => 'New Band')));
    }

    public function update($id, $data)
    {   // Action used for PUT requests
        return new JsonModel(array('data' => array('id' => 3, 'name' => 'Updated Album', 'band' => 'Updated Band')));
    }

    public function delete($id)
    {   // Action used for DELETE requests
        return new JsonModel(array('data' => 'album id 3 deleted'));
    }
}