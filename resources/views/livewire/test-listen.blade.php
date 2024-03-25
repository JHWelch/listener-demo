<div>
    <div class="flex space-x-4">
        @if($showRed)
            <div class="bg-red-500 text-white p-4">Red</div>
        @endif

        @if($showGreen)
            <div class="bg-green-500 text-white p-4">Green</div>
        @endif

        @if ($showBlue)
            <div class="bg-blue-500 text-white p-4">Blue</div>
        @endif
    </div>

    <button wire:click="$dispatch('showColors')" class="bg-violet-600 text-white p-4 mt-4 rounded-md">Show Colors</button>
</div>
