<?php

namespace App\Livewire;

use App\Models\Reaction;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Reactions extends Component
{
    private array $symbols = ['😕', '🙂', '😄', '😍', '😇'];

    /**
     * @var array Reaction count for a Cookie message
     */
    #[Locked]
    #[Reactive]
    public array $reactionCounts;

    public function render()
    {
        return view('livewire.reactions', [
            'reactionTypes' => array_combine(Reaction::$reactions, $this->symbols)
        ]);
    }

    public function react($reactionType)
    {
        $this->dispatch('reacted', $reactionType);
    }
}
