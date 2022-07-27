<?php

namespace App\Controllers;

use App\Models\DatapengembalianModel;
use App\Models\DatarentalModel;
use App\Models\PemilikModel;
use App\Models\PenyewaModel;

class Rental extends BaseController
{
    protected $pemilikModel;
    protected $penyewaModel;
    protected $dataRentalModel;
    protected $dataPengembalianModel;
    public function __construct()
    {
        $this->pemilikModel = new PemilikModel();
        $this->penyewaModel = new PenyewaModel();
        $this->dataRentalModel = new DatarentalModel();
        $this->dataPengembalianModel = new DatapengembalianModel();
    }
    public function index()
    {
        $data = [
          'title'     => 'Home'
        ];
        return view('pages/home', $data);
    }

    // PEMILIK METHOD
    public function pemilik()
    {
        session();
        $data = [
          'title'     => 'Pemilik',
          'validation'=> \Config\Services::validation()
        ];
        return view('pages/pemilik', $data);
    }
    public function savePemilik()
    {
        if (!$this->validate([
          'id_plat_mobil'   => [
            'rules'   => 'required|is_unique[mobil.id_plat_mobil]',
            'errors'  => [
              'required'    => 'Id Plat Mobil Wajib diisi',
              'is_unique'   => 'Plat Mobil Sudah Ada'
            ]
          ],
          'nama_mobil'   => [
            'rules'   => 'required',
            'errors'  => [
              'required'    => 'Nama Mobil Wajib diisi'
            ]
          ],
          'jenis_mobil'   => [
            'rules'   => 'required',
            'errors'  => [
              'required'    => 'Jenis Mobil Wajib diisi'
            ]
          ],
          'tahun_produksi'   => [
            'rules'   => 'required',
            'errors'  => [
              'required'    => 'Tahun Produksi Wajib diisi'
            ]
          ],
          'harga_sewa'   => [
            'rules'   => 'required',
            'errors'  => [
              'required'    => 'Harga Sewa Wajib diisi'
            ]
          ]
        ])) {
          return redirect()->to('/rental/pemilik')->withInput();
        }
        $this->pemilikModel->save([
          'id_plat_mobil'  => $this->request->getVar('id_plat_mobil'),
          'nama_mobil'     => $this->request->getVar('nama_mobil'),
          'jenis_mobil'    => $this->request->getVar('jenis_mobil'),
          'tahun_produksi' => $this->request->getVar('tahun_produksi'),
          'harga_sewa'     => $this->request->getVar('harga_sewa')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/pemilik');
    }
    // END PEMILIK

    // PENYEWA METHOD
    public function penyewa()
    {
        session();
        $data = [
          'title'   => 'Penyewa',
          'validation'=> \Config\Services::validation()
        ];
        return view('pages/penyewa', $data);
    }
    public function savePenyewa()
    {
        if (!$this->validate([
          'nama_penyewa'   => [
            'rules'   => 'required',
            'errors'  => [
              'required'    => 'Nama Wajib diisi'
            ]
          ],
          'no_ktp'   => [
            'rules'   => 'required|min_length[10]',
            'errors'  => [
              'required'    => 'No KTP Wajib diisi',
              'min_length'   => 'No KTP Harus 10 nomor'
            ]
          ],
          'alamat'   => [
            'rules'   => 'required',
            'errors'  => [
              'required'    => 'Alamat Wajib diisi'
            ]
          ]
        ])) {
          return redirect()->to('/rental/penyewa')->withInput();
        }
        $faker = \Faker\Factory::create();
        $this->penyewaModel->save([
          'id_penyewa'    => $faker->randomNumber(5),
          'nama_penyewa'  => $this->request->getVar('nama_penyewa'),
          'no_ktp'        => $this->request->getVar('no_ktp'),
          'alamat'        => $this->request->getVar('alamat'),
        ]);
        return redirect()->to('/rental/dataRental');
    }
    // END PENYEWA

    // DATARENTAL METHOD
    public function dataRental()
    {
        session();
        $dataPenyewa = $this->penyewaModel->findAll();
        $dataMobil = $this->pemilikModel->findAll();
        $data = [
          'title'         => 'Data Rental',
          'data_penyewa'  => $dataPenyewa,
          'data_mobil'    => $dataMobil,
          'validation'=> \Config\Services::validation()
        ];
        return view('pages/data_rental', $data);
    }
    public function saveDatarental()
    {
        $this->dataRentalModel->save([
          'id_penyewa' => $this->request->getVar('id_penyewa'),
          'no_ktp' => $this->request->getVar('no_ktp'),
          'nama_penyewa' => $this->request->getVar('nama_penyewa'),
          'nama_mobil' => $this->request->getVar('nama_mobil'),
          'id_plat_mobil' => $this->request->getVar('id_plat_mobil'),
          'tanggal_rental' => $this->request->getVar('tanggal_rental'),
          'lama_sewa' => $this->request->getVar('lama_sewa'),
          'harga_sewa' => $this->request->getVar('harga_sewa'),
          'total_harga_sewa' => 100000
        ]);
        return redirect()->to('/rental/dataPengembalian');
    }
    // END DATARENTAL

    public function dataPengembalian()
    {
        $denda = 100000;
        $dataRental = $this->dataRentalModel->findAll();
        $data = [
          'title'       => 'Data Pengembalian',
          'data_rental' => $dataRental,
          'denda'       => $denda,
          'validation'  => \Config\Services::validation()
        ];
        return view('pages/data_pengembalian', $data);
    }
}
