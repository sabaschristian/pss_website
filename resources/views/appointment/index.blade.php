<x-layout>
    <h1 class="title mb-5">Appointment</h1>
    
    @if (session('success'))
    
    <div class="max-w-[300px] bg-lime-300 p-3 mt-5 rounded-lg">
        <p class="font-semibold text-center">{{ session('success') }}</p>
    </div>

    @endif

    @if ($appointment)
    <div class="border-b border-gray-900/10 pb-8"></div> 

    <div class="space-y-12 px-8 py-4">
        <div class="px-4 sm:px-0">
          <h3 class="text-base font-semibold leading-7 text-gray-900">Appointment Information</h3>
        </div>
        <div class="mt-6 border-t border-gray-100">
          <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $appointment->firstname . ' ' . $appointment->lastname}}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Email address</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $appointment->email}}</dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Address</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                {{ $appointment->address . ', ' . $appointment->city . ', ' . $appointment->state . ', ' . $appointment->postal}}
            </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">About</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$appointment->about}}</dd>
            </div>

          </dl>
        </div>
      </div>
      
    @endif
</x-layout>