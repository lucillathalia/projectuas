<?php

namespace App\Controllers;

class SuratMasuk extends BaseController
{
    public function index(): string
    {
        $model = new SuratMasukModel();
        $data['surat'] = $model->findAll();
        return view('surat_masuk',$data);
    }

    public function tambah()
    {
        return view('surat_masuk/tambah');
    }

    public function simpan()
    {
        $model = new SuratMasukModel();
        $data = [
            'tanggal_terima' => $this->request->getPost('tanggal_terima'),
            'nomor_surat' => $this->request->getPost('nomor_surat'),
            'pengirim' => $this->request->getPost('pengirim'),
            'keterangan' => $this->request->getPost('keterangan'),
            'file_surat' => $this->request->getPost('file_surat')
        ];
        $model->insert($data);
        return redirect()->to('/surat-masuk');
    }

    public function edit($id)
    {
        $model = new SuratMasukModel();
        $data['surat'] = $model->find($id);
        return view('surat_masuk/edit', $data);
    }

    public function update($id)
    {
        $model = new SuratMasukModel();
        $data = [
            'tanggal_terima' => $this->request->getPost('tanggal_terima'),
            'nomor_surat' => $this->request->getPost('nomor_surat'),
            'pengirim' => $this->request->getPost('pengirim'),
            'keterangan' => $this->request->getPost('keterangan'),
            'file_surat' => $this->request->getPost('file_surat')
        ];
        $model->update($id, $data);
        return redirect()->to('/surat-masuk');
    }

    public function hapus($id)
    {
        $model = new SuratMasukModel();
        $model->delete($id);
        return redirect()->to('/surat-masuk');
    }
}
