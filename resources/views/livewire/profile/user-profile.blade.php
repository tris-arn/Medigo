<div class="container d-flex flex-row mt-5 justify-content-between">
    @include("livewire.profile.nav-profile")
    <div class="w-75">
       <h1 class="mb-4">My Profile</h1>
       <div class="container border border-grey rounded-4 shadow p-4">
            <ul class="list-unstyled">
                <li class="d-flex flex-row justify-content-between mb-2 align-items-center" style="width: 29%">
                    <div>
                        {{-- <div class="rounded-circle bor  ">75</div> --}}
                        <img src="" alt="" class="rounded-circle border border-black" style="min-width: 60px; min-height:60px">
                    </div>
                    <div>
                        <ul class="list-unstyled">
                            <li>Joel Kurniawan</li>
                            <li>08429492</li>
                            <li>JoelKurniawan@gmail.com</li>
                        </ul>
                    </div>
                </li>
                <li class="border-bottom pt-3 pb-3">
                    <div class="d-flex justify-content-between">
                        <div>Username</div>
                        <div>Joel</div>
                    </div>
                </li>
                <li class="border-bottom pt-3 pb-3">
                    <div class="d-flex justify-content-between">
                        <div>Date of Birth</div>
                        <div>Joel</div>
                    </div>
                </li>
                <li class="border-bottom pt-3 pb-3">
                    <div class="d-flex justify-content-between">
                        <div>Email</div>
                        <div>Joel</div>
                    </div>
                </li>
                <li class="border-bottom pt-3 pb-3">
                    <div class="d-flex justify-content-between">
                        <div>Address</div>
                        <div>Joel</div>
                    </div>
                </li>
                <li class="pt-3 pb-3">
                    <div class="d-flex justify-content-between">
                        <div>Gender</div>
                        <div>Male</div>
                    </div>
                </li>
            </ul>
       </div>
    </div>
</div>
<script>
    document.querySelector(".active").classList.remove('active')
    document.querySelector(".prof").classList.add('active')
</script>

