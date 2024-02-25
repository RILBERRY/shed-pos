<div class=" p-4 bg-transparent max-w-6xl mx-auto rounded-lg z-50  ">
    <div class="relative p-4 w-[23rem] md:w-[30rem] lg:w-[50rem] md:ml-32 m-0 md:mb-52">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    {{ $modelData['id'] ? 'Edit Customer Details' : 'Create New Customer' }}
                </h3>
                <button wire:click="closeModal()" type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form wire:submit="{{ $modelData['id'] ? 'update' : 'createCustomer' }}" class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer Name <span
                                class="text-red-500 ">*</span></label>
                        <input type="text"  wire:model="modelData.name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Client Name" required>
                    @error('modelData.name') <span class=" text-red-800">Name is required</span> @enderror
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tin"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tin</label>
                        <input type="text" wire:model="modelData.tin" id="tin"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Tin">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="contact"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Number</label>
                        <input type="number" wire:model="modelData.contact" id="contact"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Contact">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" wire:model="modelData.email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Email">
                    </div>
                    {{-- <div class="col-span-2 sm:col-span-1">
                            <label for="small" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small select</label>
                            <select id="small" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option selected>Choose a product</option>
                              @foreach ($products as $product)
                              <option value="{{$product->id}}">{{$product->name}}</option>
                              @endforeach
                            </select>

                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rate</label>
                        <input type="text" wire:model="modelData.email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Rate">

                    </div> --}}
                    @if ($modelData['id'])

                    <div class="col-span-2 sm:col-span-1">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" wire:model='modelData.is_blocked' value="" class="sr-only peer" wire:model.change="blockStatus">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4  rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-red-600">
                            </div>
                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Block Client</span>
                        </label>

                    </div>
                    <div class="col-span-2 ">
                        <label for="blocked_reason"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blocked
                            Reason</label>
                        <input type="text" wire:model="modelData.block_reason" id="blocked_reason"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Blocked reason">
                    </div>
                    @endif

                </div>
                <button type="submit"
                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    {{ $modelData['id'] ? 'Update Customer' : 'Add new Customer' }}

                </button>
            </form>
        </div>
    </div>
</div>
