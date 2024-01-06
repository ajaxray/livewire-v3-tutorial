<div class="reaction-bar">
    @foreach($reactionTypes as $type => $emoji)
        <a href="#" class="reaction"
           wire:key="{{ $type }}"
           wire:click.prevent="$dispatch('reacted', {reactionType: '{{ $type }}'})"
        >
            {{ $emoji }}
            <span class="count">{{ $reactionCounts[$type] ?? ''}}</span></a>
    @endforeach
</div>
