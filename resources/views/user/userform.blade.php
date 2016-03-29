@extends('layouts.master')

@section('title')
 		Developers Best Friend
@stop
@section('content')
<div class="col-md-4 col-md-offset-4">
 	<form method='POST' action='/user' >

 	<div class="form-group"> 	 
    {{ csrf_field() }}
    <label for="noofusers">How Many fake Users?</label>
    <input type='text' name='noofusers' value = "{{  old('noofusers') }}">
     <div class="checkbox">
    <label>
      <input type="checkbox" name="birthday" {{ old('birthday') ? 'checked=checked' : ''}}> Include Birthday
    </label>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="location" {{ old('location') ? 'checked=checked' : ''}}> Include location
    </label>
  </div>
     </div>
    <input type='submit' value='Submit'>
 
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

@if (isset($fakes) && !empty($fakes)) 
<div class="gaptop">
     <table class="table table-striped">
     			<tr>
					<th>Name</th>   
					@if (isset($fakes[0]->location) && !empty($fakes[0]->location)) 
					<th>Location</th>
					@endif    	
					@if (isset($fakes[0]->birthday) && !empty($fakes[0]->birthday)) 
					<th>Birthday</th>
					@endif    			
     			</tr>
     			
		 @foreach ($fakes as $fake) 
		 			<tr>
						<td>{{ $fake->name}}</td>		 					 	
		 				@if (isset($fake->location) && !empty($fake->location)) 
					  <td>{{$fake->location}}</td>
					  @endif    	
					  @if (isset($fake->birthday) && !empty($fake->birthday)) 
					  <td>{{$fake->birthday}}</td>
					  @endif    
					</tr>		
		  @endforeach    
     </table>
 </div>
@endif

  
 @stop

  