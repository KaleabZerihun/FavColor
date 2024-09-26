<?php

namespace App\Livewire;

use App\Models\UserFavorite;
use Livewire\Component;

class DisplayFavorites extends Component
{
    public function render()
    {
        $favorites = UserFavorite::with('user')->get();
        return view('livewire.display-favorites', ['favorites' => $favorites])->layout('layouts.app');
    }
}
