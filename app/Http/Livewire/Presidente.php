<?php


namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\l_presidente;
use Livewire\WithPagination;
class Presidente extends Component
{
    use WithPagination;

    public $_id, $p;
    public $nom,$ape,$ced, $n_ca,$pos;
    public $buscar;
    public function render()
    {
        return view('livewire.presidente');
    }
}
