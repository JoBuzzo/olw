<select name="{{ $name }}" id="{{$name}}">
    @foreach ($addresses as $address)
        <option value="{{ $address->id }}">{{ "$address->city - $address->state" }}</option>
    @endforeach
</select>