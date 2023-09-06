<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Customer_model;

class Customer extends Controller
{
    public function index()
    {
        $model = new Customer_model();
        $data['customer'] = $model->getCustomer();
        $data = array(
            'customer' => $model->paginate(2, 'customer')
        );
        return view('customer_view', $data);
    }

    public function add_new()
    {
        return view('add_customer_view');
    }

    public function store()
    {
        //load helper form and URL
        helper(['form', 'url']);

        //define validation
        $validation = $this->validate([
            'name' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan nama.'
                ]
            ],
            'address'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan alamat.'
                ]
            ],
        ]);

        if (!$validation) {

            //render view with error validation message
            return view('customer-create', [
                'validation' => $this->validator
            ]);
        } else {

            //model initialize
            $customerModel = new Customer_model();

            //insert data into database
            $customerModel->insert([
                'customer_name'   => $this->request->getPost('customer_name'),
                'customer_address' => $this->request->getPost('customer_address'),
            ]);

            //flash message
            session()->setFlashdata('message', 'Customer Berhasil Disimpan');

            return redirect()->to(base_url('customer'));
        }
    }
}
