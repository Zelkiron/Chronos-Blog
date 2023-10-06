<select name={{$name}} class='p-2 mt-2 w-3/4 min-w-fit border-gray-300 rounded-lg border-2 bg-gray-100'>
    @foreach($options as $option)
        <option class='' value={{$option->id}}>{{$option->name}}</option>
    @endforeach
</select>
<br>
