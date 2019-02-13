@extends('layouts.layout')

@section('content')

    <h1>Create new feedback page</h1>
    <form method="post" action="/feedback">
        @csrf
        <select name="investment_id">
            <?php $defaultSelect = 'selected';?>
            @foreach($investmentlist as $investment)
                <option value="{{$investment->id}}" <?php echo $defaultSelect;?> >{{$investment->name}}</option>
                <?php $defaultSelect = '';?>
            @endforeach
        </select><br />
        <label>Uw score :</label><input type="number" name="score">
        <input type="submit" name="submit">
    </form>
@endsection
