<div>
    <form wire:submit.prevent="save" method="post">
        @csrf
        <h3 class="font-semibold text-lg mb-3">Invoice Details</h3>
        <div>
            <x-label for="title" value="{{ __('Title') }}" />
            <x-input wire:model="document.title" class="block mt-1 mb-1 w-full" type="text"   autofocus  />
        </div>
        @error('document.title')
        <span  class="text-red-500">{{$message}}</span>
        @enderror

        <div>
            <x-label for="document_number" value="{{ __('Document Number') }}" />
            <x-input wire:model="document.document_number" class="block mt-2 w-full mb-1" type="text"  autofocus />
        </div>
        @error('document.document_number')
        <span  class="text-red-500">{{$message}}</span>
        @enderror

        <h3 class="font-semibold text-lg mt-2">Buyer Details</h3>
        <div>
            @if ($company)
            <x-feathericon-edit class="inline-block" wire:click="removeComapny()" /> Name : {{$company->name}} , Email :{{$company->email}}
        @else
        @livewire('autocomplete',['table'=>'companies','event'=>'companySelected','createComponent'=>'company.form'])
      {{-- <a class=" inline-block p-2 mt-3  bg-blue-500 " onclick ="openModel('company.form','event=companySelected&title=CreateCompany')">
            Create new
        </a> --}}
        @endif
        </div>
      

        <x-button class="mt-4" style="margin:10px;">
            {{ __('save') }}
        </x-button>
    </form>

    {{-- <div class="mt-2 ml-5">
        @livewire('document.attachments',['document'=>$document])
    </div> --}}

</div>

