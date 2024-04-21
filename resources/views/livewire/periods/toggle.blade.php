<?php

use App\Models\Period;
use Livewire\Volt\Component;

new class extends Component {
    public $status;
    public $periodId;

    public function mount($status, $periodId): void
    {
        $this->status = $status;
        $this->periodId = $periodId;
    }

    public function toggle(): void
    {
        $this->status = !$this->status;

        $period = Period::find($this->periodId);

        $period->update([
            'is_active' => !$this->status,
        ]);

    }
}; ?>

<div>
    <x-toogle :value="$status" wire:click="toggle" />
</div>
