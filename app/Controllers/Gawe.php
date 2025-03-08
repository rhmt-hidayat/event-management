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

    public function create()
    {
        return view('gawe/add');
    }

    public function store()
    {
        //Cara 1 name field sama dengan nama di database otomatis lebih cepat
        // $data = $this->request->getPost();

        //Cara 2
        $data = $this->request->getPost(['name_gawe', 'info_gawe', 'date_gawe']);
        //Cara 3 name spesifik
        // $data = [
        //     'name_gawe' => $this->request->getPost('name_gawe'),
        //     'info_gawe' => $this->request->getPost('info_gawe'),
        //     'date_gawe' => $this->request->getPost('date_gawe')
        // ];

        $this->db->table('gawe')->insert($data);
        if($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('gawe'))->with('success', 'Data berhasil disimpan');
        }
    }

    public function edit($id)
    {
        if($id != null) {
            //cek nomor id
            $query = $this->db->table('gawe')->getWhere(['id_gawe' => $id]);
            if($query->resultID->num_rows > 0) {
                // dd($query);
                $data['gawe'] = $query->getRow();
                return view('gawe/edit', $data);
            }
            else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        //cara 1 name field sama dengan nama di database otomatis lebih cepat
        // $data = $this->request->getPost();
        // unset($data['_method']);

        //Cara 2 name spesifik
        $data = [
            'name_gawe' => $this->request->getPost('name_gawe'),
            'info_gawe' => $this->request->getPost('info_gawe'),
            'date_gawe' => $this->request->getPost('date_gawe')
        ];

        $this->db->table('gawe')->where(['id_gawe' => $id])->update($data);
        return redirect()->to(site_url('gawe'))->with('success', 'Data berhasil diupdate');
    }
}
