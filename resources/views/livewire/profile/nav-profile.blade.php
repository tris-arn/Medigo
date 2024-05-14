{{-- @extends('Structure.main') --}}

{{-- @section('container') --}}

<div class="" style="width: 20%">
    
    <nav class="">
        <ul class="nav nav-underline flex-column flex-column border border-grey shadow p-4 rounded-4">
            <li class="nav-item border-bottom">
              <a class="nav-link active d-block pt-3 pb-3 prof" href="/profile" wire:navigate>My Profile</a>
            </li>
            <li class="nav-item border-bottom">
              <a class="nav-link pb-3 pt-3 chpw" href="/changePassOld" wire:navigate>Change Password</a>
            </li>
            <li class="nav-item border-bottom">
              <a class="nav-link pb-3 pt-3 logout" href="/logout" wire:navigate>Log Out</a>
            </li>
        </ul>
    </nav>
</div>

{{-- @endsection --}}
