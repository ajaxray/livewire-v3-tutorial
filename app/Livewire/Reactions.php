<?php

namespace App\Livewire;

use App\Models\Reaction;
use Livewire\Component;
use Livewire\Features\SupportLockedProperties\Locked;

class Reactions extends Component
{
    private array $symbols = ['😕', '🙂', '😄', '😍', '😇'];

    /**
     * @var array Reaction count for a Cookie message
     */
    #[Locked]
    public array $reactionCounts;

    public int $cookieId;

    public function render()
    {
        return view('livewire.reactions', [
            'reactionTypes' => array_combine(Reaction::$reactions, $this->symbols)
        ]);
    }
}
