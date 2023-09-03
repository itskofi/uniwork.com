<!-- component -->
<!-- This is an example component -->
<div x-data="{ search: false }" class="flex space-x-1 bg-white border border-black p-2 rounded-xl w-full">
    <div class="my-auto">
        <span class="font-semibold">{{ $label }}</span>
    </div>

    <div class="relative sm:hidden">
      <input class="border-none text-sm" type="text" size="30" placeholder="{{ $placeholder }}">
    </div>
    <div class="relative hidden sm:block">
      <input class="border-none text-sm sm:w-52 md:w-64 lg:w-96" type="text" placeholder="{{ $placeholder }}">
    </div>

    <div class="relative my-auto justify-self-end">
        <div x-on:click="search = !search" class="">
            <svg x-show="search == false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
            <svg x-show="search == true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
    </div>
</div>
