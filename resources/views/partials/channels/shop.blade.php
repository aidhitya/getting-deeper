<select name="cart" id="cart">
    @foreach ($channels as $channel)
        <option>{{ $channel->name }}</option>
    @endforeach
</select>