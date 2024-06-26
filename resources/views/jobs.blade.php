<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <h1>Available Jobs</h1>
    <ul role="list" class="divide-y divide-gray-100">
    @foreach ($jobs as $job)
        <li class="flex justify-between gap-x-6 py-5 hover:underline" onclick="location.href='jobs/{{ $job['id'] }}'">
            <div class="flex min-w-0 gap-x-4">
              <img class="h-12 w-12 flex-none bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              <div class="min-w-0 flex-auto">
                <a href="/jobs/{{ $job['id'] }}" class="text-sm font-semibold leading-6 text-gray-900 ">{{ $job['title'] }}</a>
                <p class="mt-1 truncate text-xs leading-5 text-gray-500">Short description</p>
                <p class="mt-1 truncate text-xs leading-5 text-gray-500">MYR {{ $job['salary'] }} per year/annum</p>
              </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
              <p class="text-sm leading-6 text-gray-900">Availability Check</p>
              <p class="mt-1 text-xs leading-5 text-gray-500">Posted <time datetime="2023-01-23T13:23Z">3h ago</time></p>
            </div>
        </li>
    @endforeach
    </ul>
</x-layout>