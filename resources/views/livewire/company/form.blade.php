<div>
    <form wire:submit.prevent="save" method="post">
        @csrf

        <div>
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input wire:model="company.name" class="block mt-1 w-full" type="text" name="name"  autofocus  />
        </div>
        @error('company.name')
        <span  class="text-red-500">{{$message}}</span>
        @enderror

        <div>
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input wire:model="company.email" class="block mt-1 w-full" type="email" name="email" autofocus />
        </div>
        @error('company.email')
        <span  class="text-red-500">{{$message}}</span>
        @enderror

        <div>
            <x-label for="mobile" value="{{ __('Mobile') }}" />
            <x-input  wire:model="company.mobile" class="block mt-1 w-full" maxlength='11' type="text" name="mobile" autofocus />
            @error('company.mobile')
            <span  class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        

        <x-button class="mt-4" style="margin:10px;">
            {{ __('save') }}
        </x-button>
    </form>

</div>
