<div>
    <form wire:submit.prevent="save" method="post">
        @csrf

        <div>
            <x-label for="title" value="{{ __('Title') }}" />
            <x-input wire:model="document.title" class="block mt-1 w-full" type="text"   autofocus  />
        </div>
        @error('document.title')
        <span  class="text-red-500">{{$message}}</span>
        @enderror

        <div>
            <x-label for="document_number" value="{{ __('Document Number') }}" />
            <x-input wire:model="document.document_number" class="block mt-1 w-full" type="text"  autofocus />
        </div>
        @error('document.document_number')
        <span  class="text-red-500">{{$message}}</span>
        @enderror

        

        <x-button class="mt-4" style="margin:10px;">
            {{ __('save') }}
        </x-button>
    </form>

</div>

