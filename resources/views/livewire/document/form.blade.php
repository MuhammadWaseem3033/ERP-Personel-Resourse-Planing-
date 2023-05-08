<div>
    <form wire:submit.prevent="save" method="post">
        @csrf
        <h3 class="font-semibold text-lg mb-3">Invoice Details</h3>
        <div>
            <x-label for="title" value="{{ __('Title') }}" />
            <x-input wire:model="document.title" class="block mt-1 mb-1 w-full" type="text" autofocus />
        </div>
        @error('document.title')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <div>
            <x-label for="document_number" value="{{ __('Document Number') }}" />
            <x-input wire:model="document.document_number" class="block mt-2 w-full mb-1" type="text" autofocus />
        </div>
        @error('document.document_number')
            <span class="text-red-500">{{ $message }}</span>
        @enderror

        <h3 class="font-semibold text-lg mt-2">Buyer Details</h3>
        <div>
            @if ($company)
                <x-feathericon-edit class="inline-block" wire:click="removeComapny()" /> Name : {{ $company->name }} ,
                Email :{{ $company->email }}
            @else
                @livewire('autocomplete', ['table' => 'companies', 'event' => 'companySelected', 'createComponent' => 'company.form'])
                {{-- <a class=" inline-block p-2 mt-3  bg-blue-500 " onclick ="openModel('company.form','event=companySelected&title=CreateCompany')">
            Create new
        </a> --}}
            @endif
        </div>
        <h3 class="font-semibold text-lg mt-2">Items</h3>
            <table class="w-full text-sm text-left bg-slate-100 dark:bg-gray-700 text-white">
                <thead class="text-xs text-gray-100 uppercase bg-gray-500  ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Item
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td class=" border-b p-2">{{ $item['name'] }}</td>
                            <td class=" border-b p-2">
                                <x-input type="text" />
                            </td>
                            <td class=" border-b p-2"></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div>
                    @livewire('autocomplete', ['table' => 'items', 'event' => 'addItem', 'createComponent' => 'item.form'])
            </div>
    




        <x-button class="mt-4" style="margin:10px;">
            {{ __('save') }}
        </x-button>
    </form>

    {{-- <div class="mt-2 ml-5">
        @livewire('document.attachments',['document'=>$document])
    </div> --}}

</div>
