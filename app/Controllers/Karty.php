<?php

namespace App\Controllers;

use App\Models\TypKomponent;
use App\Models\Komponent; 

class Karty extends BaseController
{
    public function index()
    {
        $model = new TypKomponent();

        // Získáme všechny typy komponent
        $data['typy'] = $model->findAll();

        return view('typy_komponentu', $data);
    }

    public function dleTypu($url)
    {
        

        $typModel = new \App\Models\TypKomponent();
        $komponentModel = new \App\Models\Komponent();
    
        $typ = $typModel->where('url', $url)->first();
    
        if (!$typ) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Typ komponenty nebyl nalezen.");
        }
    
        $komponenty = $komponentModel
            ->where('typKomponent_id', $typ['idKomponent'])
            ->where('delete', 0)
            ->findAll();
    
        return view('komponenty_dle_typu', [
            'typ' => $typ,
            'komponenty' => $komponenty
        ]);
    }
}

