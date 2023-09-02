<div>
    @unless (empty($jobs))
        <div class="">{{ $jobs->count() }} Jobs found</div>
        <div class="flex flex-col space-y-2">
            @foreach ($jobs as $job)
                <div class="border border-black rounded-xl px-2">
                    <a href="/viewjob/{{$loop->index}}" class="">
                        <div class="">
                            <span class="font-semibold">{{ $job['title'] }},</span>
                            <span class="font-semibold">{{ $job['place'] }}</span>
                        </div>
                        <div class="">Working Hours: {{ $job['working_hours'] }}</div>
                        <div class="">Salary: {{ $job['salary'] }}</div>
                        <div class="">Contact Person: {{ $job['contact_person'] }}</div>
                        <div class="">Company: {{ $job['company'] }}</div>
                    </a>
                </div>
            @endforeach
        </div>
    @endunless
</div>
