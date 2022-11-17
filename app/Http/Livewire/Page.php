<?php

namespace App\Http\Livewire;

use App\Models\visiteur;
use Livewire\Component;

use function Termwind\render;

class Page extends Component
{

    public $name;

    protected $rules = [
        'name' => 'required|max:190|min:1',
    ];

    protected $messages = [
        'name.max' => 'trop long (190 max)',
        'name.required' => '',
    ];

    public function newVisiteur()
    {
        $this->validate();
        visiteur::insert([
            'name' => $this->name,
        ]);
        $this->name = "";
    }




    public function render()
    {
        return view('livewire.page', [
            'visiteurs' => visiteur::OrderBy('id', 'DESC')->get()
        ]);
    }
}
