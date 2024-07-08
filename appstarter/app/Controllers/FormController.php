<?php

namespace App\Controllers;

use Codeigniter\Controller;

class FormController extends BaseController
{
  public function submit()
  {
    $nama = $this->request->getPost('nama');
    $nim = $this->request->getPost('nim');
    $kelas = $this->request->getPost('kelas');
    $matakuliah = $this->request->getPost('matakuliah');
    $dosen = $this->request->getPost('dosen');
    $asisten = $this->request->getPost('asisten');

    return view('result', compact('nama', 'nim', 'kelas', 'matakuliah', 'dosen', 'asisten'));
  }
}
