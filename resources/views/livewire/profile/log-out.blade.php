<div class="container d-flex flex-row mt-5 justify-content-between">
    @include("livewire.profile.nav-profile")
    <div class="w-75">
        <h1 class="mb-4">Log Out</h1>
        <div class="container border border-grey rounded-4 shadow p-4">  
            <h3 class="text-center mb-5">Are you sure you want to log out?</h3>
            <div class="d-flex justify-content-around w-50 mx-auto p-2">
                <button type="submit" class="btn btn-outline-dark" style="width:25%">Yes</button>
                <button type="submit" class="btn btn-outline-dark" style="width:25%">No</button>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelector(".active").classList.remove('active')
    document.querySelector(".logout").classList.add('active')
</script>
