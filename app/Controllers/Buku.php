<?php 

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{

    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
	{
        // $book = $this-> bukuModel-> findAll();
        
        $data = [
            'title' => 'Daftar Buku',
            'book' => $this->bukuModel->getBuku()
        ];

    return view('buku/index',$data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Buku',
            'book' => $this->bukuModel->getBuku($slug)
        ];
        return view('buku/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Buku',
            'validation' => \Config\Services::validation()
        ];

        return view('buku/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[book.judul]',
                'errors' => [
                    'required' => '{field} buku harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',    
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            //$validation = \Config\Services::validation();
            //return redirect()->to('/buku/create')->withInput()->with('validation',$validation);
            return redirect()->to('/buku/create')->withInput();
            
        }
        
        //ambil gambar
        $fileSampul = $this->request->getFile('sampul');

        //jika tidak ada gambar diupload
        if($fileSampul->getError() == 4){
            $namaSampul = 'default.png';
        }else {
            //ambil nama file
            $namaSampul = $fileSampul->getRandomName();
            
            //pindahkan file ke folder img
            $fileSampul->move('img', $namaSampul);
        }
        

        $slug = url_title($this->request->getVar('judul'),'-',true);
        $this->bukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul
            
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        
        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        //cari gambar berdasar id
        $book = $this->bukuModel->find($id);

        //cek jika gambar default.png
        if($book['sampul'] != 'default.png'){

            unlink('img/' . $book['sampul']);
        
        }

        //hapus gambar

        $this->bukuModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/buku');
    }

    public function edit($slug)
    {
        
        $data = [
            'title' => 'Form Ubah Data Buku',
            'validation' => \Config\Services::validation(),
            'book' => $this->bukuModel->getBuku($slug)
        ];

        return view('buku/edit', $data);

    }

    public function update($id)
    {
        //cek judul
        $judulLama = $this->bukuModel->getBuku($this->request->getVar('slug'));
        if ($judulLama['judul'] == $this->request->getVar('judul')){
            $rule_judul = 'required';
        }else{
            $rule_judul = 'required|is_unique[book.judul]';
        }

        //validasi
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} buku harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
                ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',    
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            
            return redirect()->to('/buku/edit/' . $this->request->getVar('slug'))->withInput()->with('validation',$validation);
        }

        $fileSampul = $this->request->getFile('sampul');

        //cek gambar berubah atau tidak 
        if($fileSampul->getError() == 4){
            $namaSampul = $this->request->getVar('sampulLama');
        }else {
            //nama random
            $namaSampul = $fileSampul->getRandomName();
            //pindahkan gambar
            $fileSampul->move('img',$namaSampul);
            // hapus gambar lama
            unlink('img/'. $this->request->getVar('sampulLama'));
        }

       $slug = url_title($this->request->getVar('judul'),'-',true);
        $this->bukuModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul
            
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');
        
        return redirect()->to('/buku');
    }

}    

	//--------------------------------------------------------------------
