<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Users extends ResourceController
{
    protected $modelName = 'App\Models\Users';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function create()
    {
        $incoming = $this->request->getJSON(true);
        $incoming['password'] = md5($incoming['password']);
        $incoming['clearance'] = 1;

        if (!empty($db = $this->model->where($incoming)->find())) {
            return $this->respond($db);
        } else {
            return $this->respond($this->model->insert($incoming));
        }
    }
    //--------------------------------------------------------------------

}
// $routes->get('photos/new',             'Photos::new');
// $routes->post('photos',                'Photos::create');
// $routes->get('photos',                 'Photos::index');
// $routes->get('photos/(:segment)',      'Photos::show/$1');
// $routes->get('photos/(:segment)/edit', 'Photos::edit/$1');
// $routes->put('photos/(:segment)',      'Photos::update/$1');
// $routes->patch('photos/(:segment)',    'Photos::update/$1');
// $routes->delete('photos/(:segment)',   'Photos::delete/$1');