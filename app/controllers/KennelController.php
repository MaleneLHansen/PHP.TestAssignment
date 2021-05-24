<?php

namespace Linkfire\Assignment\Controllers;

use Phalcon\Mvc\Controller;

class KennelController extends Controller
{

    /**
     * This is found at
     * http://localhost/kennel/addDoggo
     */
    public function addDoggoAction()
    {
        $dogService = $this->getDI()->getDogService();
        $kennelService = $this->getDi()->getKennelService();

        $kennel = $kennelService->get();

        $name = 'Fie';
        $weight = 12.2;
        $age = 8;
        $gender = 'female';
        $dog = $dogService->create($name, $weight, $age, $gender);
        $added = $kennelService->add($kennel, $dog);

        $this->response->setContentType('application/json', 'UTF-8');
        $this->response->setStatusCode(201);
        return $this->response->setContent(json_encode(['success' => $added]));
    }
}