
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage '.$type->name) }}
        </h2>
    </x-slot>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style =' width: 75%;'>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style=" border:2px dashed blue ; padding:5px;">
                @livewire('document.form' ,['document'=>$document ,'type'=>$type])
            </div>
        </div>
    </div>
</x-app-layout>