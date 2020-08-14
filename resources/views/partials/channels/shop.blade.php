<select name="cart" id="cart">
    @foreach ($channels as $channel)
        <option value="{{ $channel->id }}">{{ $channel->name }}</option>
    @endforeach
</select>