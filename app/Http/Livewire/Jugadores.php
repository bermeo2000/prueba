<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\l_jugadores;
use Livewire\WithPagination;

class Jugadores extends Component
{
    use WithPagination;

    public $_id, $j;
    public $nom,$ape,$ced, $n_ca,$pos;
    public $buscar;



    public function render()
    {

        return view('livewire.jugadores');
      
    }
 
}
