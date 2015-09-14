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

    <label>Date and Time</label>
<div>
    <input id="datetimepicker" type="text" >
</div>

{{ Form::label('location', 'Location') }}
{{ Form::text('location', null, ['class' => 'form-control']) }}

{{ Form::label('file','File',array('id'=>'','class'=>'')) }}
{{ Form::file('file','',array('id'=>'','class'=>'')) }}
<br/>

<button class="btn btn-default">Save</button>