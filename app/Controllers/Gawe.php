<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Gawe extends BaseController
{
    public function index()
    {
        //cara 1 query builder
        // $builder = $this->db->table('gawe');
        // $query = $builder->get()->getResult();
        // $data['gawe'] = $query;

        //cara 2 query manual digunakan jika ada script query lebih kompleks (query dalam query)
        $query = $this->db->query("SELECT * FROM gawe");
        $data['gawe'] = $query->getResult();

        // print_r($query->getResult());
        return view('gawe/index', $data);
    }
}
