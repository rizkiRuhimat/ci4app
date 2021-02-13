<?php

namespace App\Controllers;

// date_default_timezone_set('Asia/Jakarta');

use \App\Models\PicModel;
use \App\Models\AgendaModel;
use \App\Models\TypeModel;
use CodeIgniter\I18n\Time;


class Agenda extends BaseController
{
    protected $AgendaModel;
    protected $PicModel;
    protected $TypeModel;

    public function __construct()
    {
        helper('sn');
        $this->agendaModel = new AgendaModel();
        $this->picModel = new PicModel();
        $this->typeModel = new TypeModel();
    }

    public function index()
    {
        $agenda = $this->agendaModel->orderby('id', 'desc')->findAll();
        $data = [
            'title' => 'Daftar Agenda',
            // 'agenda' => $this->AgendaModel->getAgenda()
            'agenda'    => $agenda
        ];

        return view('agenda/index', $data);
    }

    public function detail($id)
    {
        $myTime = Time::now('Asia/Jakarta', 'en_US');
        $data = [
            'title' => 'Detail Agenda',
            'agenda' => $this->agendaModel->getAgenda($id),
            'time' => $myTime
        ];

        // jika agenda tidak ada di table
        if (empty($data['agenda'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Agenda "' . $id . '" tidak ditemukan.');
        }

        return view('agenda/detail', $data);
    }

    public function create()
    {
        $pic = $this->picModel->orderby('nama', 'asc')->findAll();
        $category = $this->typeModel->orderby('typetask', 'asc')->findAll();
        $myTime = Time::now('Asia/Jakarta', 'en_US');

        $data = [
            'title'         => 'Tambah Data Agenda',
            'pic'           => $pic,
            'category'      => $category,
            'time'          => $myTime,
            'validation'    => \Config\Services::validation()
        ];
        // dd($data);

        return view('agenda/create', $data);
    }

    public function save()
    {

        $this->agendaModel->save([
            'date'      => $this->request->getVar('date'),
            'name'       => $this->request->getVar('pic'),
            'task_type'  => $this->request->getVar('category'),
            'task'      => $this->request->getVar('task'),
            'status'    => $this->request->getVar('status'),
            'remark'    => $this->request->getVar('remark')
        ]);

        // $data = [
        //     'date'      => $this->request->getVar('date'),
        //     'pic'       => $this->request->getVar('pic'),
        //     'category'  => $this->request->getVar('category'),
        //     'task'      => $this->request->getVar('task'),
        //     'status'    => $this->request->getVar('status'),
        //     'remark'    => $this->request->getVar('remark')
        // ];
        // dd($data);


        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/agenda');
    }

    public function delete($id)
    {

        // cek gambar berdasarkan id
        // $agenda = $this->agendaModel->find($id);
        // dd($agenda);

        $this->agendaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/agenda');
    }

    public function edit($id)
    {
        $pic = $this->picModel->orderby('nama', 'asc')->findAll();
        $category = $this->typeModel->orderby('typetask', 'asc')->findAll();
        $data = [
            'title' => 'Ubah Data Agenda',
            'validation' => \Config\Services::validation(),
            'agenda' => $this->agendaModel->getAgenda($id),
            'pic'           => $pic,
            'category'      => $category,
        ];

        return view('agenda/edit', $data);
    }

    public function update($id)
    {
        // cek task
        $agendaLama = $this->agendaModel->getAgenda($this->request->getVar('id'));


        if ($agendaLama['task'] == $this->request->getVar('task')) {
            $rule_task = 'required';
        } else {
            $rule_task = 'required|is_unique[agenda.task]';
        }

        if (!$this->validate([
            'task' => [
                'rules' => $rule_task,
                'errors' => [
                    'required' => '{field} agenda harus diisi.',
                    'is_unique' => '{field} agenda sudah terdaftar.'
                ]
            ]
            // ,
            // 'sampul' => [
            //     'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
            //     'errors' => [
            //         'max_size' => 'Ukuran file tidak boleh lebih dari 1 Mb',
            //         'is_image' => 'File yang dipilih bukan gambar',
            //         'mime_in' => 'File yang dipilih bukan .jpg, .jpeg, .png'
            //     ]

        ])) {
            return redirect()->to('/agenda/edit/' . $this->request->getVar('id'))->withInput();
        }
        // $fileSampul = $this->request->getFile('sampul');

        // // cek file gambar, baru atau tetap
        // if ($fileSampul->getError() == 4) {
        //     // sampulLama diambil dari input hidden pada view edit line 10
        //     $namaSampul = $this->request->getVar('sampulLama');
        // } else {
        //     // jika upload file baru, generate nama file baru
        //     $namaSampul = $fileSampul->getRandomName();
        //     // pindahkan gambar
        //     $fileSampul->move('img', $namaSampul);
        //     // hapus gambar berdasarkan sampulLama pada view edit line 10
        //     unlink('img/' . $this->request->getVar('sampulLama'));
        // }

        // $id = url_title($this->request->getVar('id'), '-', true);
        // $data = [
        //     'id' => $id,
        //     'task' => $this->request->getVar('task'),
        //     'task_type' => $this->request->getVar('tipe'),
        //     // 'id' => $id,
        //     'status' => $this->request->getVar('status'),
        //     'remark' => $this->request->getVar('remark')
        // ];
        // dd($data);

        $this->agendaModel->save([
            'id' => $id,
            'task' => $this->request->getVar('task'),
            'task_type' => $this->request->getVar('tipe'),
            'status' => $this->request->getVar('status'),
            'remark' => $this->request->getVar('remark')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah');


        return redirect()->to('/agenda');
    }
}