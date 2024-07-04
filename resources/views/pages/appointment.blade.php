<x-layout>
    <h1 class="title">Appointment</h1>

    <div class="">
        <div class="border-b border-gray-900/10 pb-12"></div>   
        <form class="mt-4" action="{{ route('appointment') }}" method="post">
          @csrf

            <div class="space-y-12 px-8 py-4">

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
              
                    <div class="mt-8 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                      <div class="sm:col-span-3">
                        <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                        <div class="mt-2">
                          <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" autocomplete="firstname" class="input @error('firstname') ring-red-500 @enderror">
                        </div>
                        @error('firstname')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                      </div>
              
                      <div class="sm:col-span-3">
                        <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                        <div class="mt-2">
                          <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" autocomplete="lastname" class="input @error('firstname') ring-red-500 @enderror">
                        </div>
                        @error('lastname')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                      </div>
              
                      <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                        <div class="mt-2">
                          <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" class="input @error('firstname') ring-red-500 @enderror">
                        </div>
                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                      </div>
              
                      <div class="col-span-full">
                        <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Street address</label>
                        <div class="mt-2">
                          <input type="text" name="address" id="address" value="{{ old('address') }}" autocomplete="address" class="input @error('firstname') ring-red-500 @enderror">
                        </div>
                        @error('address')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                      </div>
              
                      <div class="sm:col-span-2 sm:col-start-1">
                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                        <div class="mt-2">
                          <input type="text" name="city" id="city" value="{{ old('city') }}" autocomplete="city" class="input @error('firstname') ring-red-500 @enderror">
                        </div>
                        @error('city')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                      </div>
              
                      <div class="sm:col-span-2">
                        <label for="state" class="block text-sm font-medium leading-6 text-gray-900">State / Province</label>
                        <div class="mt-2">
                          <input type="text" name="state" id="state" value="{{ old('state') }}" autocomplete="address-level1" class="input @error('firstname') ring-red-500 @enderror">
                        </div>
                        @error('state')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                      </div>
              
                      <div class="sm:col-span-2">
                        <label for="postal" class="block text-sm font-medium leading-6 text-gray-900">ZIP / Postal code</label>
                        <div class="mt-2">
                          <input type="text" name="postal" id="postal" value="{{ old('postal') }}" autocomplete="postal" class="input @error('firstname') ring-red-500 @enderror">
                        </div>
                        @error('postal')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                      </div>
                    </div>

                    <div class="col-span-full">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900 mt-5">About</label>
                        <div class="mt-2">
                          <textarea id="about" name="about" rows="3" value="{{ old('about') }}" class="input @error('about') ring-red-500 @enderror"></textarea>
                        </div>
                        @error('about')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                        <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about your appointment.</p>
                      </div>
                  </div>
            </div>
          
            <div class="mt-6 flex items-center justify-end mr-3">
              <button type="submit" class="submit-btn">Submit</button>
            </div>
          </form>
    </div>
</x-layout>