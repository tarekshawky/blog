<div class="bg-gray-900" xmlns:livewire="http://www.w3.org/1999/html">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">
        <div class="">
            <a wire:navigate href="/" class="text-gray-700 font-bold text-2xl cursor-pointer">home</a>
        </div>
        @if (Route::has('login'))
            <div class="flex items-center gap-8">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <livewire:button wire:navigate name="login" href="{{route('login')}}" />


                @if (Route::has('register'))
                        <livewire:button  wire:navigate name="Register" href="{{route('register')}}"/>

                    @endif
                @endauth
            </div>
        @endif
    </div>


</div>



