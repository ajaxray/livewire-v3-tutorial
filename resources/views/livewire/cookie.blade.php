<div>
    <h2>{{ $message }}</h2>

    <button class="button-pink" role="button" wire:click="rotate"  style="float: left">
        Surprise Me!
    </button>

    <div style="float: right">
        <livewire:reactions />
    </div>

    <div style="clear: both"></div>
</div>
