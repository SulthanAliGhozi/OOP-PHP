<?php
class Hewan {
    public $Animals = [];

    public function __construct() {
        $this->Animals = [
            ['id' => 1, 'Nama' => 'Kucing'],
            ['id' => 2, 'Nama' => 'Anjing'],
            ['id' => 3, 'Nama' => 'Burung'],
        ];
    }

    public function index() {
        echo "Index - Menampilkan seluruh data hewan:<br>";
        foreach ($this->Animals as $hewan) {
            echo "id: {$hewan['id']}, Nama: {$hewan['Nama']}<br>";
        }
    }

    public function store($Nama) {
        $newHewan = ['id' => count($this->Animals) + 1, 'Nama' => $Nama];
        $this->Animals[] = $newHewan;
        echo "Store - Hewan baru telah ditambahkan: $Nama<br>";
    }

    public function update($id, $Nama) {
        foreach ($this->Animals as &$hewan) {
            if ($hewan['id'] == $id) {
                $hewan['Nama'] = $Nama;
                echo "Update - Hewan dengan id $id telah diperbarui: $Nama<br>";
                return;
            }
        }
        echo "Hewan dengan id $id tidak ditemukan<br>";
    }

    public function destroy($id) {
        foreach ($this->Animals as $key => $hewan) {
            if ($hewan['id'] == $id) {
                unset($this->Animals[$key]);
                echo "Hewan dengan id $id telah dihapus<br>";
                return;
            }
        }
        echo "Delete - Hewan dengan id $id tidak ditemukan<br>";
    }
}

$hewan = new Hewan();
$hewan->index();

$hewan->store('Kelinci');
$hewan->index();

$hewan->update(2, 'Anjing Besar');
$hewan->index();

$hewan->destroy(3);
$hewan->index();
?>