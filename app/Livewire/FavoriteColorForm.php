<?php

namespace App\Livewire;

use App\Models\UserFavorite;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FavoriteColorForm extends Component
{
    public $name;
    public $favorite_color;

    protected $rules = [
        'name' => 'required|string|max:255',
        'favorite_color' => 'required|string|max:255',
    ];

    public function submit()
    {
        $this->validate();

        $submission = new UserFavorite();
        $submission->user_id = Auth::id();
        $submission->name = $this->name;
        $submission->favorite_color = $this->favorite_color;
        $submission->save();

        session()->flash('message', 'Favorite color added successfully!');
        $this->reset(['name', 'favorite_color']);
    }
    public function render()
    {
        return view('livewire.favorite-color-form')->layout('layouts.app');
    }

}
