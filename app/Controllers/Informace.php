<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Komponent;

class Informace extends BaseController
{
    public function detail($id)
    {
        $model = new Komponent();
        
        $komponenta = $model->find($id);

        if($komponenta) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Komponenta nenalezena.");

        }
        return view('komponenta_detail', ['komponenta' => $komponenta]);

            
        
    }
}
