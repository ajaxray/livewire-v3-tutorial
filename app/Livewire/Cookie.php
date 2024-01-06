<?php

namespace App\Livewire;

use App\Models\Message;
use App\Models\Reaction;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportLockedProperties\Locked;

class Cookie extends Component
{
    #[Locked]
    public int $currentMessageId = 0;

    // Message to display to the visitor
    public string $message;

    public array $reactionCounts;

    public function rotate()
    {
        $fortuneMessage = Message::where('is_active', true)
            ->orderByRaw('RAND()')
            ->with('reactions')
            ->firstOrFail();

        if ($fortuneMessage->id !== $this->currentMessageId) {
            $this->currentMessageId = $fortuneMessage->id;
            $this->message = $fortuneMessage->message;

            $this->reactionCounts = $fortuneMessage->reactions->mapWithKeys(function ($item, $key) {
                return [$item['reaction'] => $item['count']];
            })->toArray();
        } else {
            $this->rotate();
        }
    }

    #[On('reacted')]
    public function saveReaction($reactionType)
    {
        $values = [
            'message_id' => $this->currentMessageId,
            'reaction' => $reactionType,
            'count' => 1,
        ];

        $uniqueBy = ['reaction', 'message_id'];
        $update = ['count' => DB::raw('count+1')];

        Reaction::query()->upsert($values, $uniqueBy, $update);

        isset($this->reactionCounts[$reactionType])
            ? $this->reactionCounts[$reactionType]++
            : $this->reactionCounts[$reactionType] = 1
        ;
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
