<div>

    @unless (empty($job))
        <div class="">
            <div class="">
                <span class="font-semibold">{{ $job['title'] }},</span>
                <span class="font-semibold">{{ $job['place'] }}</span>
            </div>
            <div class="">Description: {{ $job['description'] }}</div>
            <div class="">Working Hours: {{ $job['working_hours'] }}</div>
            <div class="">Salary: {{ $job['salary'] }}</div>
            <div class="">Contact Person: {{ $job['contact_person'] }}</div>
            <div class="">Company: {{ $job['company'] }}</div>
        </div>
    @else
        <div class="alert alert-danger">
            <strong>Whoops!</strong> No job found.
        </div>
    @endunless
</div>
