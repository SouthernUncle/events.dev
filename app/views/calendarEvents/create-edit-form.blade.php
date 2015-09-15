{{ Form::label('title', 'Title') }}
{{ Form::text('title', null, ['class' => 'form-control']) }}

<label for="description">Description</label>
        
<div class="wmd-panel">
    <div id="wmd-button-bar"></div>
    <textarea class="wmd-input form-control" name="description" cols="50" rows="10" id="wmd-input"></textarea>
</div>

<label>Preview:</label>
<div id="wmd-preview" class="wmd-panel wmd-preview"></div>

{{ Form::label('price', 'Price ($)') }}
{{ Form::number('price', null, ['class' => 'form-control']) }}

<label for="start">Date and Time</label>
<div>
    <input id="datetimepicker" class="form-control" name="start" type="text" >
</div>

<label for="location">Location</label>
<div>
    <select class="form-control" name="location">
        @foreach ($locations as $location)
            <option value="{{{ $location->id }}}">{{{ $location->place }}}</option>
        @endforeach
    </select>
</div>

{{ Form::label('file','File',array('id'=>'','class'=>'')) }}
{{ Form::file('file','',array('id'=>'','class'=>'')) }}
<br>

<button class="btn btn-default">Save</button>