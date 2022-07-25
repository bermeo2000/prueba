<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\l_equipos;
use Livewire\WithPagination;

class Equipos extends Component
{
    use WithPagination;

    public $_id;
    public $n_eq,$log,$cid;
    public $buscar;
    
    public function render()
    {
        $e = l_equipos::all();

        return view('livewire.equipos',compact('e'));
    }
}
