

<div class="flex flex-col mt-8">
    <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b sm:rounded-lg">
            <div class="flex justify-between align-middle my-6">
                <div class="flex justify-items-start align-middle">
                    {{-- <input 
                        wire:model="search_keywords"
                        type="text" 
                        class="rounded transition duration-150 ease-in outline-none w-full leading-5 sm:text-sm ml-1" 
                        name="search_keywords" 
                        id="search_keywords"
                        placeholder="Search..."
                    /> --}}

                    <div class="relative flex items-center text-gray-400">
                        <span class="absolute left-4 h-6 flex items-center pr-3 border-r border-gray-300">
                        <svg xmlns="http://ww50w3.org/2000/svg" class="w-4 fill-current" viewBox="0 0 35.997 36.004">
                            <path id="Icon_awesome-search" data-name="search" d="M35.508,31.127l-7.01-7.01a1.686,1.686,0,0,0-1.2-.492H26.156a14.618,14.618,0,1,0-2.531,2.531V27.3a1.686,1.686,0,0,0,.492,1.2l7.01,7.01a1.681,1.681,0,0,0,2.384,0l1.99-1.99a1.7,1.7,0,0,0,.007-2.391Zm-20.883-7.5a9,9,0,1,1,9-9A8.995,8.995,0,0,1,14.625,23.625Z"></path>
                        </svg>
                        </span>
                        <input type="search" name="leadingIcon" id="leadingIcon" placeholder="Search here" class="w-full pl-14 pr-4 py-2.5 rounded-xl text-sm text-gray-600 outline-none border border-gray-300 ml-1 transition">
                    </div>
                    <button wire:click="clearSearchKeywords" class="flex justify-between items-middle text-sm rounded border hover:bg-yellow-400 hover:text-white border-yellow-400 text-yellow-400 ml-4 px-2 pt-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 inline-block">
                                <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="inline-block">Clear</span>
                    </button>
                </div>
                <div>
                    <input 
                        wire:model="is_active"
                        type="checkbox" class="rounded mr-2 h-4 w-4 transition duration-100 ease-in-out" name="is_active" id="is_active_chk_box"><span class="text-sm">Active?</span>
                </div>
            </div>
            <table class="table table-auto min-w-full">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                           <div class="flex justify-start align-middle">
                            <button 
                                wire:click="sortBy('account_number')"
                                class="text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase ">
                                Account Number
                            </button>
                            <x-sort-icon 
                                field="account_number"
                                :sortField="$sortField"
                                :sortAsc="$sortAsc"
                            />
                           </div>
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Opened Date</th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Status</th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Company</th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Actions</th>
                    </tr>
                </thead>
            
                <tbody class="bg-white">
                    @foreach($accounts as $account)
                    <tr>
                        <td class="w-1/5 px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-500">{{$account->account_number}}</div>
                        </td>
                        <td class="w-1/5 px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-500">{{$account->open_date}}</div>
                        </td>
            
                        <td class="w-1/5 px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span class="inline-flex px-2 text-xs font-semibold leading-5 
                                rounded-full {{$account->active ? 'text-green-800 bg-green-100' : 'text-red-800 bg-red-100'}}">
                                {{$account->active ? 'Active': 'InActive'}}
                            </span>
                        </td>
            
                        <td
                            class="w-1/5 px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-500">{{$account->tenant->name}}</div>
                        </td>
                        <td class="w-1/5 px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-6">
            {{$accounts->links()}}
        </div>
    </div>
</div>