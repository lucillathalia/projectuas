<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SuratKeluar extends BaseController
{
    public function index()
    {
        $model = new SuratKeluarModel();
        $data['surat'] = $model->findAll();
        return view('surat_keluar/index', $data);
    }

    public function tambah()
    {
        return view('surat_keluar/tambah');
    }

    public function simpan()
    {
        $model = new SuratKeluarModel();
        $data = [
            'tanggal_kirim' => $this->request->getPost('tanggal_kirim'),
            'nomor_surat' => $this->request->getPost('nomor_surat'),
            'penerima' => $this->request->getPost('penerima'),
            'keterangan' => $this->request->getPost('keterangan'),
            'file_surat' => $this->request->getPost('file_surat')
        ];
        $model->insert($data);
        return redirect()->to('/surat-keluar');
    }

    public function edit($id)
    {
        $model = new SuratKeluarModel();
        $data['surat'] = $model->find($id);
        return view('surat_keluar/edit', $data);
    }

    public function update($id)
    {
        $model = new SuratKeluarModel();
        $data = [
            'tanggal_kirim' => $this->request->getPost('tanggal_kirim'),
            'nomor_surat' => $this->request->getPost('nomor_surat'),
            'penerima' => $this->request->getPost('penerima'),
            'keterangan' => $this->request->getPost('keterangan'),
            'file_surat' => $this->request->getPost('file_surat')
        ];
        $model->update($id, $data);
        return redirect()->to('/surat-keluar');
    }

    public function hapus($id)
    {
        $model = new SuratKeluarModel();
        $model->delete($id);
        return redirect()->to('/surat-keluar');
    }
}
