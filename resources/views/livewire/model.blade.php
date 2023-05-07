<div>
    @if ($component)
    <div wire:model="closeModel"class="bg-grdient-to-r from-gary-400 to-transparent fixed top-0 right-0 w-full h-full"></div>
        <div class="fixed top-16  right-10 bottom-4 w-full md:w-half lg:w-1/4 bg-white h-full shadow-sm border-1">
            <div class="flex items-center justify-between border-b bg-slate-400">
                <div class="owerflow-auto">
                    <a href="" class=" text-center text-red-500 cursor-pointer float-right "
                        wire:click="closeModel"><x-tabler-x class="m-3 "/></a>
                </div>
            </div>
            <div class=" mt-1 ">
                @livewire($component ,$data)
            </div>
    </div>
    @endif
</div>
