<div>
    <h1>{{ ucfirst($type) }} Adkars</h1>

    @foreach ($adkars as $adkar)
        <div>
            <strong>{{ $adkar->title }}</strong>
            <p>{{ $adkar->content }}</p>

            <form method="POST" action="{{ route('adkar.complete') }}">
                @csrf
                <input type="hidden" name="adkar_id" value="{{ $adkar->id }}">
                <button type="submit">Complete</button>
            </form>
        </div>
    @endforeach

</div>
