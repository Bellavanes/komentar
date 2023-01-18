<?php

namespace App\Http\Livewire;

use App\Models\komentar;
use Livewire\Component;

class Berita extends Component
{
    public $txtkomentar;
    public function simpan()
    {
        $simpan = new komentar();
        $simpan->isi_komentar = $this->txtkomentar;
        $simpan->save();
        $this->reset();
     }
        public function hapus($idhapus)
     {
        $hapus = komentar::findOrFail($idhapus);
        $hapus->delete();
        $this->reset();

    }
    public function render()
{
    return view('livewire.berita', [
        'isi_komentar' => komentar::orderBy('created_at', 'desc')->get()
]);
}
}
