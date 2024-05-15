<div class="container d-flex flex-row mt-5 justify-content-between">
    @include("livewire.profile.nav-profile")
    <div class="w-75">
        <h1 class="mb-4">Change Password</h1>
        <div class="container border border-grey rounded-4 shadow p-4">  
            <form action="/newPass" >
                <div class="d-flex border-0 justify-content-between border-bottom pt-3 pb-3 mb-4">
                    <label for="oldPass">Old Password</label>
                    <input type="password" name="oldPass" id="oldPassword">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-dark" style="width:18%">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.querySelector(".active").classList.remove('active')
    document.querySelector(".chpw").classList.add('active')
</script>


{{-- @for ($i = 0; $i < 5; $i++)
    {{ $i }}
@endfor


@php
   $count = 5;
    $i = 0;
    $collection = ["buah", "mainan", "makanan"]
@endphp

@while ($i < $count)
    {{ $i++ }}
@endwhile

@php
    $collection = ["buah", "mainan", "makanan"]
@endphp

@foreach ($collection as $item)
    {{ $item }}
@endforeach --}}








