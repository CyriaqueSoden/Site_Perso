<?php

namespace App\Http\Livewire;

use App\Models\visiteur;
use Livewire\Component;

use function Termwind\render;

class Page extends Component
{

    public $name;

    public function newVisiteur()
    {
        visiteur::insert([
            'name' => $this->name,
        ]);
    }



    public function render()
    {
        return view('livewire.page', [
            'visiteurs' => visiteur::OrderBy('id', 'DESC')->get()
        ]);
    }
}
