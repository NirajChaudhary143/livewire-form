<div>
    <h1>Registration</h1>
    <form wire:submit.prevent="submit">
        <input type="text" placeholder="Enter Name" wire:model="name">
        <br><br>
        <input type="email" placeholder="Enter email" wire:model="email">
        <br><br>
        <input type="text" placeholder="Enter Phone Number" wire:model="phone_number">
        <br><br>
       <input type="submit">
    </form>
</div>
