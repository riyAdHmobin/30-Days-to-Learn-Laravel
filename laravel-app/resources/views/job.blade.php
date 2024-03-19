<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    
    <strong>{{ $job['title']}}</strong>
    <p>
        Salary: {{ $job['salary']}} per month.
    </p>
    
</x-layout>