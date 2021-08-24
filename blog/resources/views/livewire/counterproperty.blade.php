<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <h1>this is property binding</h1>
    <h2>{{$message}}</h2>
    <input type="text" wire:model.debounce.1000ms='message'>

    <h3>{{$msg}}</h3>
    <button wire:mouseover="myFunction('biswajit')">Click me</button>
</div>
