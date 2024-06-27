
    
<div>
    @if($loginpage)
    @include('livewire.auth.login')

    @endif
    @if($registerpage)
    @include('livewire.auth.register')
    @endif
    @if($emailfindpage)
    @include('livewire.auth.emailfind')
    @endif
    @if($emailotppage)
    @include('livewire.auth.emailotp')
    @endif
    @if($homepage)
    @include('livewire.auth.home')
    @endif
</div>
    
