<div>
    <h1>Registration</h1>
    <form wire:submit.prevent="submit">
        <input type="text" placeholder="Enter Name" wire:model="name">
        @error('name') {{$message}} @enderror
        <br><br>
        <input type="email" placeholder="Enter email" wire:model="email">
        @error('email') {{$message}} @enderror
        <br><br>
        <input type="text" placeholder="Enter Phone Number" wire:model="phone_number">
        @error('phone_number') {{$message}} @enderror
        <br><br>
       <input type="submit">
    </form>
</div>
