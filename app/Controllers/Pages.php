<?php 

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
	{
        $data = [
            'title' => 'Home | Igniter'
        ];

        return view('pages/home',$data);
    }
    
    // public function about()
    // {
    //       $data = [
    //         'title' => 'About | Igniter'
    //     ];
        
    //     return view('pages/about',$data);
    // }
    
    public function contact()
    {
        $data = [
            'title' => 'Contact | Igniter' ,
            'alamat' =>[
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jln.asjlkdhajk',
                    'kota' => 'Makassar'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'jln.Sultan Hasanuddin',
                    'kota' => 'Makassar'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
	//--------------------------------------------------------------------

}
