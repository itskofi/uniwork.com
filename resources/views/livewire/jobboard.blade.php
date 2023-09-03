<div>
    @unless (empty($jobs))
        <div class="text-sm">{{ $jobs->count() }} Jobs found</div>
        <div class="grid grid-cols-1 sm:grid-cols-2">
            <div class="flex flex-col space-y-2 max-h-screen overflow-hidden overflow-y-scroll">
                @foreach ($jobs as $job)
                    <div class="hover:bg-blue-50 rounded-xl cursor-pointer">
                        <a href="/viewjob/{{ $loop->index }}" class="sm:hidden">
                            <x-home.jobs :job="$job" />
                        </a>

                        <a wire:click="displayJobDetails({{ $loop->index }})" class="hidden sm:block">
                            <x-home.jobs :job="$job" />
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="hidden sm:block">
                <div class="border h-screen rounded-xl ml-2 overflow-hidden">
                    <livewire:view-job-iframe-controller />
                </div>
            </div>
        </div>
    @endunless
</div>
