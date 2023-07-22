<?php

namespace App\Livewire;

use Illuminate\Support\Arr;
use Livewire\Component;

class Cookie extends Component
{
    private array $messages = [
        'Time may fly by. But Memories don\'t.',
        'Nothing in the world is accomplished without passion.',
        'The project on your mind will soon gain momentum.',
        'A dream you have will come true.',
        'A journey of a thousand miles begins with a single step.',
    ];

    // Index of currently displaying message
    /** @locked  */
    public int $currentIdx = 0;

    // Message to display to the visitor
    public string $message;

    public function rotate()
    {
        $idx = array_rand($this->messages);

        if ($idx !== $this->currentIdx) {
            $this->currentIdx = $idx;
            $this->message = $this->messages[$idx];
        } else {
            $this->rotate();
        }
    }

    public function mount()
    {
        $this->rotate();
    }

    public function render()
    {
        return view('livewire.cookie');
    }
}
