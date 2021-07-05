<table border="1">
<tr>
    <td>stt</td>
    <td>cong viec</td>
</tr>
@foreach($list as $w)
<tr>
    <td>{{$w->id}}</td>
    <td>{{$w->todo}} </td>
    <td>
        <form action="{{route('delete')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$w->id}}">
            <button type="submit">delete</button>
        </form>
    </td>
    <td>
        <form action="{{route('edit')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$w->id}}">
            <input type="text" name="rework" placeholder="sua cong viec">
            <button type="submit">edit submit</button>
        </form>
    </td>
</tr>
@endforeach
</table>
<form action="{{route('add')}}" method="POST">
    @csrf
    <input type="text" name="work" placeholder="cong viec"/>
    <button type="submit">add work</button>
</form>