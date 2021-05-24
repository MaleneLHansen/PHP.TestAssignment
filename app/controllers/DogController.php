<?php
declare(strict_types=1);
namespace Linkfire\Assignment\Controllers;

use Phalcon\Mvc\Controller;

class DogController extends Controller
{
    /**
     * This is found at http://localhost/dog
     * Returns an instance of Dog from a Service accessed through the DI.
     */
    public function indexAction()
    {
        $name = 'Fie';
        $weight = 12.2;
        $age = 8;
        $gender = 'female';
        $dogService = $this->getDi()->get('dogService');
        $dog = $dogService->create($name, $weight, $age, $gender);
        $this->response->setContentType('application/json', 'UTF-8');

        return $this->response->setContent(json_encode($dog->toArray()));
    }
}