<div x-data="{isOpen: false}">

    <div class="px-6 pt-6 lg:px-8">
        <nav class="flex h-9 items-center justify-between" aria-label="Global">
            <div class="flex lg:min-w-0 lg:flex-1" aria-label="Global">
                <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <h1 class="border">hak9 Banking Portal</h1>
                </a>
            </div>
            
            <div class="flex lg:hidden">
                <button
                    @click="isOpen = !isOpen"
                    type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <!-- Heroicon name: outline/bars-3 -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                </button>
            </div>
            <div 
                
                class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-center lg:gap-x-12">
                <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Product</a>

                <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Features</a>

                <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Marketplace</a>

                <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Company</a>
            </div>
            <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-end">
                <a href="/login" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Log in</a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div x-show="isOpen" 
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75 transform"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            x-cloak role="dialog" aria-modal="true">
            <div focus="true" class="fixed inset-0 z-10 overflow-y-auto bg-white px-6 py-6 lg:hidden">
                <div class="flex h-9 items-center justify-between">
                    <div class="flex">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <h1>hak9 Banking Portal</h1>
                        </a>
                    </div>
                    <div class="flex">
                        <button 
                        @click="isOpen = false"
                        @click.away="isOpen = false"
                        type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div 
                    
                    class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Products</a>
            
                            <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Features</a>
            
                            <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Marketplace</a>
            
                            <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Company</a>
                        </div>
                        <div class="py-6">
                            <a href="/login" class="-mx-3 block rounded-lg py-2.5 px-3 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-400/10">Log in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>