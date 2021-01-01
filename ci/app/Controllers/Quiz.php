<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Quiz extends ResourceController
{
    protected $modelName = 'App\Models\Quiz';
    protected $format    = 'json';

    public function index()
    {
        $quizlet = new \App\Models\Quiz();
        $incoming = $this->request->getGet();
                if(!empty($db=$quizlet->where($incoming)->find())){
        $res = $db[0];
    
        $data = ['code'=> $res['code'],
                    'title' => $res['title'],
                    'description' => $res['description'],
                    'published' => $res['published'],
                    'questions' => json_decode($res['questions'])];
        // var_dump($data);
        // echo view('users/quizlet', $data);
        return $this->respond($data);
    }else {
        return $this->failNotFound('The Quiz code you entered is incorrect');
    }
    }

    public function create()
    {
        $incoming = $this->request->getPost();
        $incoming['questions'] = json_encode($incoming['questions']);
        $incoming['answers'] = json_encode($incoming['answers']);
        
        return $this->respond($this->model->insert($incoming));
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