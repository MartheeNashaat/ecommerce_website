<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('profile.update-profile-information-form')

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <x-jet-section-border />
            
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>
            @endif

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>
<br>
            <div>
                 <div class="border-t border-gray-200"></div>
            </div>
    <br>
            <div >
                 <label style=" font-size: 115%;">My Orders </label> <br>
                 <label style="color:#4b5563; font-size: 90%;">Display my previous orders here </label>

                 
        <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg" style ="margin-left:34.5%; width:65%;">
         
        
           <!--  @extends('layouts.search')
             @section('content')
              @endsection  -->
              <div> 
                  <?php
                   $email = auth()->user()->email; 
                   $name = auth()->user()->name;
                   $date= auth()->user()->created_at;
                 
                   $roles = DB::table('users')->where('email', $email)->pluck('email');
                   foreach ($roles as $email => $title) {
                    echo '';//$title;
                }
                    ?>
                     <div><pre>{{  $title   }}              Ordered at: {{ $date}}</div>
                
             
             </div> 
             </div>
        </div>
    </div>
    
    <x-jet-section-border />

<div class="mt-10 sm:mt-0">
    @livewire('profile.delete-user-form')
</div>
<br>
    </div>
        </div>
    
</x-app-layout>
