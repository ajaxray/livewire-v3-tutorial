<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use Livewire\Features\SupportLockedProperties\Locked;

class Cookie extends Component
{
    #[Locked]
    public int $currentIndex = 0;

    // Message to display to the visitor
    public string $message;

    public array $reactionCounts;

    public function rotate()
    {
        $fortuneMessage = Message::where('is_active', true)
            ->orderByRaw('RAND()')
            ->with('reactions')
            ->firstOrFail();

        if ($fortuneMessage->id !== $this->currentIndex) {
            $this->currentIndex = $fortuneMessage->id;
            $this->message = $fortuneMessage->message;

            $this->reactionCounts = $fortuneMessage->reactions->mapWithKeys(function ($item, $key) {
                return [$item['reaction'] => $item['count']];
            })->toArray();
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
