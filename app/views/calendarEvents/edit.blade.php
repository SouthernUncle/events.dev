@extends('layouts.master')

@section('title', 'Edit Event')

@section('style')
    {{ HTML::style('/css/jquery.datetimepicker.css'); }}
    {{ HTML::style('/css/events_edit.css'); }}
@stop

@section('heading', 'Editor')

@section('subheading', '...')

@section('image_url', '/img/pen.jpg')

@section('content')
{{ Form::model($calendarEvent, array('action' => array('CalendarEventsController@update', $calendarEvent->id), 'method' => 'PUT')) }}

{{ Form::label('title', 'Title') }}
{{ Form::text('title', null, ['class' => 'form-control']) }}

<label for="description">Description</label>

<div class="wmd-panel">
    <div id="wmd-button-bar"></div>
    <textarea class="wmd-input form-control" name="description" cols="50" rows="10" id="wmd-input">{{ $calendarEvent->description }}</textarea>
</div>
<label>Preview:</label>
<div id="wmd-preview" class="wmd-panel wmd-preview"></div>

{{ Form::label('price', 'Price ($)') }}
{{ Form::number('price', null, 
    [
        'class' => 'form-control',
        'min'   => 0,
        'max'   => 200,
    ])
}}

<label for="start">Date and Time</label>
<div>
    <input id="datetimepicker" class="form-control" name="start" value="{{ $calendarEvent->start }}" type="text" >
</div>

<label for="location">Location</label>
<div>
    {{ Form::select('location', $locations, $calendarEvent->location->id, array('class' => 'form-control'))}}
</div>

{{ Form::label('file','File',array('id'=>'','class'=>'')) }}
{{ Form::file('file','',array('id'=>'','class'=>'')) }}
<br/>

<button class="btn btn-default">Save</button>

{{ Form::close() }}
@stop

@section('js')
<script src="/js/Markdown.Sanitizer.js"></script>
<script src="/js/Markdown.Converter.js"></script>
<script src="/js/Markdown.Editor.js"></script>
<script src="/js/jquery.datetimepicker.js"></script>
<script type="text/javascript">
    (function () {
        
        jQuery('#datetimepicker').datetimepicker({
            minDate: 0,
            format: 'Y-m-d H:i:s'
        });

        var converter = new Markdown.Converter();
        
        var editor = new Markdown.Editor(converter);
        
        editor.run();
    })();
</script>
@stop