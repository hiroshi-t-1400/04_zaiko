@if ($message)
    <div class="border-l-4 p-4 {{ $addClass() }} " role="alert">
        <p class="font-bold">{{ ucfirst($type) }}</p>
        <p>{{ $message }}</p>
    </div>
@endif
