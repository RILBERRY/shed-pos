<div class=" bg-white rounded-md w-full md:w-[90%] p-2 md:p-5 md:mx-auto ">
    <div class="flex md:flex-row flex-col  justify-between w-full mx-auto pb-2">
        <h3 class=" p-2 my-auto text-2xl text-gray-500">CUSTOMER</h3>
        <div class="flex gap-2 ">
            <div class="relative my-auto w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Invoice, customer" required />
            </div>
            <button wire:click="$dispatch('openModal', { component: 'create-customer' })" class="p-2 bg-blue-600 my-auto  rounded-md text-white">Create</button>
        </div>
    </div>
    <div class="Space10px"></div>
    <div class="TaskTable">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg scrollbar-hide">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 scrollbar-hide">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3" >
                            <div class="flex items-center" wire:click="sortBy('date')">
                                DATE
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                QUOTATION NO
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                CUSTOMER NAME
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            <div class="flex justify-center">
                                AMOUNT
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            <div class="flex justify-center">
                                STATUS
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-center ">
                            <div class="flex justify-center">
                                ACTION
                            </div>
                        </th>

                    </tr>
                </thead>
                <tbody class=" overflow-scroll scrollbar-hide">
                    {{-- @foreach ($invoices as $invoice) --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            12-12-2023
                        </td>
                        <td class="px-6 py-4 w-fit">
                            INV-2024-2323
                        </td>
                        <td class="px-6 py-4">
                            CUSTOMER
                        </td>
                        <td class="px-6 py-4 text-center">
                            MVR 102,332.11
                        </td>
                        <td class="px-6 py-4 text-center">
                            PAID
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button  class=" mx-auto block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" >
                                Edit
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            12-12-2023
                        </td>
                        <td class="px-6 py-4 w-fit">
                            INV-2024-2323
                        </td>
                        <td class="px-6 py-4">
                            CUSTOMER
                        </td>
                        <td class="px-6 py-4 text-center">
                            MVR 102,332.11
                        </td>
                        <td class="px-6 py-4 text-center">
                            PAID
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button  class=" mx-auto block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" >
                                Edit
                            </button>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>

            </table>
        </div>
        {{-- {{ $invoices->links('pagination-livewire') }} --}}

    </div>

</div>
