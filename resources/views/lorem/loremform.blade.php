@extends('layouts.master')

@section('title')
 		Developers Best Friend | lorem ipsum generator
@stop
@section('content')
<div >
 	<form method='POST' action='/lorem' >

 	<div class="form-group"> 	 
    {{ csrf_field() }}
    <label for='noofloremparas'>How Many Lorem Ipsum Paragraphs?</label>
    <input type='text' name='noofloremparas' value = "{{  old('noofloremparas') }}" placeholder="Number less than 16">

     </div>
     <div class="form-group"> 	 
    <input type='submit' value='Submit'>
    </div>
 
	</form>



@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</div>

@if (isset($loremtext) && !empty($loremtext)) 
<div class="loremtext">
		@foreach ($loremtext as $lortext)
		 <p>{{$lortext}}</p>
		@endforeach
</div >
@endif

  
 @stop

  