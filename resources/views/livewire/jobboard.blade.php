<div>
    @unless (empty($jobs))
        <div class="">{{ $jobs->count() }} Jobs found</div>
        <div class="flex flex-col space-y-2">
            @foreach ($jobs as $job)
                <div class="border border-black rounded-xl">
                    <div class="">{{ $job['title'] }}</div>
                    <div class="">{{ $job['description'] }}</div>
                    <div class="">{{ $job['place'] }}</div>
                    <div class="">{{ $job['working_hours'] }}</div>
                    <div class="">{{ $job['salary'] }}</div>
                    <div class="">{{ $job['contact_person'] }}</div>
                </div>
            @endforeach
        </div>
    @endunless
</div>
