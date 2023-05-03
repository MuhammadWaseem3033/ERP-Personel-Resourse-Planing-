<div>
    <form wire:submit.prevent="save" method="post">
        @csrf

        <div>
            <x-label for="name" value="{{ __('Name') }}" class="ml-4"/>
            <x-input wire:model="item.name" class="block mt-1 ml-4 w-full" type="text" name="name"  autofocus  />
        </div>
        @error('item.name')
        <span  class="text-red-500">{{$message}}</span>
        @enderror
        <div>
            <x-label for="description" value="{{ __('Description') }}" class="ml-4"/>
            <x-input wire:model="item.description" class="block mt-1 ml-4 w-full" type="text" name="description"  autofocus  />
        </div>
        @error('item.description')
        <span  class="text-red-500">{{$message}}</span>
        @enderror
        <div>
            <x-label for="hsn_code" value="{{ __('Hsn_code') }}" class="ml-4"/>
            <x-input  wire:model="item.hsn_code" class="block mt-1 w-full ml-4"  type="text" name="hsn_code" autofocus />
            @error('item.hsn_code')
            <span  class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div>
            <x-label for="sav_code" value="{{ __('sav_code') }}" class="ml-4"/>
            <x-input  wire:model="item.sav_code" class="block mt-1 w-full ml-4"  type="text" name="sav_code" autofocus />
            @error('item.sav_code')
            <span  class="text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div>
            <x-label for="price" value="{{ __('Price') }}" class="ml-4"/>
            <x-input  wire:model="item.price" class="block mt-1 w-full ml-4"  type="text" name="price" autofocus />
            @error('item.sav_code')
            <span  class="text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div>
            <x-label for="tax" value="{{ __('Tax') }}" class="ml-4"/>
            <x-input  wire:model="item.tax" class="block mt-1 w-full ml-4"  type="text" name="tax" autofocus />
            @error('item.tax')
            <span  class="text-red-500">{{$message}}</span>
            @enderror
        </div>
       
        

        <x-button class="mt-4 ml-4" style="margin:10px;">
            {{ __('save') }}
        </x-button>
    </form>

</div>

