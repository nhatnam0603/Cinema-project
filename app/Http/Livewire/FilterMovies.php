<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\TypeScreens;

class FilterMovies extends Component
{
    public $type_id;
    public function render()
    {
        $screenTypes = TypeScreens::get();

        return view('livewire.filter-movies', ['screenTypes' => $screenTypes]);
    }

    public function filter()
    {
        $this->emitTo('show-movies', 'reloadMovies', $this->type_id);
    }
}
