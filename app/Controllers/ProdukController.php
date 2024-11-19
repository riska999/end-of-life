<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class ProdukController extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index()
    {
        $data['produk'] = $this->produkModel->findAll();
        return view('produk/index', $data);
    }

    public function create()
    {
        return view('produk/create');
    }

    public function store()
    {
        $data = $this->request->getPost();

        // Menggabungkan pilihan pengingat menjadi string jika ada
        if (isset($data['pengingat']) && is_array($data['pengingat'])) {
            $data['pengingat'] = implode(',', $data['pengingat']); // Menggabungkan pilihan menjadi "1,3,7"
        } else {
            $data['pengingat'] = ''; // Jika tidak ada yang dipilih
        }

        // Simpan data produk
        $this->produkModel->save($data);
        return redirect()->to('/produk');
    }

    public function edit($id)
    {
        $data['produk'] = $this->produkModel->find($id);
        return view('produk/edit', $data);
    }

    public function update($id)
    {
        $this->produkModel->update($id, $this->request->getPost());
        return redirect()->to('/produk');
    }

    public function delete($id)
    {
        $this->produkModel->delete($id);
        return redirect()->to('/produk');
    }

        public function notification()
    {
        return view('produk/notification');
    }


    public function sendNotification()
    {
        $produk = $this->produkModel->findAll();
        $userModel = new UserModel(); // Model untuk tabel pengguna

        foreach ($produk as $item) {
            $pengingat = explode(',', $item['pengingat']);
            foreach ($pengingat as $day) {
                // Cek tanggal kadaluarsa berdasarkan pengingat
                if ($day == 7 && $item['tanggal_kadaluarsa'] == date('Y-m-d', strtotime('+7 days'))) {
                    $this->sendEmail($item, $userModel);
                } elseif ($day == 3 && $item['tanggal_kadaluarsa'] == date('Y-m-d', strtotime('+3 days'))) {
                    $this->sendEmail($item, $userModel);
                } elseif ($day == 1 && $item['tanggal_kadaluarsa'] == date('Y-m-d', strtotime('+1 day'))) {
                    $this->sendEmail($item, $userModel);
                }
            }
        }
    }

    private function sendEmail($produk, $userModel)
    {
        // Ambil semua pengguna yang perlu diberi notifikasi
        $users = $userModel->findAll(); // Ganti dengan query sesuai kebutuhan

        foreach ($users as $user) {
            $email = \Config\Services::email();
            $email->setFrom('admin@yourwebsite.com', 'Admin');
            $email->setTo($user['email']);  // Mengambil email dari database pengguna

            $email->setSubject('Notifikasi End of Life');
            $email->setMessage("Aplikasi {$produk['nama_produk']} akan segera berakhir pada {$produk['tanggal_kadaluarsa']}");

            if (!$email->send()) {
                // Log error atau tangani jika gagal mengirim
                echo $email->printDebugger();
            }
        }
    }

    public function lihat_pengingat($id_produk)
    {
        $produk = $this->produkModel->find($id_produk);

        if (!$produk) {
            return redirect()->to('/produk')->with('error', 'Produk tidak ditemukan.');
        }

        // Ambil dan siapkan data pengingat
        $reminders = explode(',', $produk['pengingat']);
        $data['produk'] = $produk;
        $data['notificationDates'] = []; // Ganti dari 'reminders' ke 'notificationDates'

        $tanggal_kadaluarsa = new \DateTime($produk['tanggal_kadaluarsa']);

        foreach ($reminders as $days) {
            // Validasi bahwa $days adalah angka yang valid
            $days = trim($days); // Menghapus spasi
            if (is_numeric($days)) {
                $notificationDate = clone $tanggal_kadaluarsa;
                $notificationDate->modify("-$days days"); // Mengurangi hari untuk mendapatkan tanggal notifikasi
                $data['notificationDates'][] = [
                    'days' => $days,
                    'date' => $notificationDate->format('Y-m-d') // Menyimpan tanggal notifikasi dalam array
                ];
            } else {
                // Jika tidak valid, Anda bisa mencetak atau mencatatnya untuk debugging
                log_message('error', 'Pengingat tidak valid: ' . $days);
            }
        }

        return view('produk/lihat_pengingat', $data); // Pastikan view ini ada
    }

}
