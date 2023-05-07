<div>
    <x-input wire:model="query" class="block mt-1 mb-1 w-full" type="text"   autofocus  />
    @if ($results)
    <div class="relative">
        <div class="absolute bg-white border w-full">
            {{-- @dd($results->id) --}}
            @foreach ($results as $result)
                <div class="p-2 hover:bg-slate-400 text-gray-800 border-b " wire:click ="select('{{$result->id}}')">
                    {{$result->name}}
                </div>
                
            @endforeach
            @if ($createComponent)
            <div class="p-2 hover:bg-slate-400 text-gray-800 border-b " 
            onclick ="openModel('{{$createComponent}}','event={{$event}}')">
                Create New
            </div>
            @endif
            
        </div>
    </div>
    @endif
</div>
