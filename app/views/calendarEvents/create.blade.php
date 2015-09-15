@extends('layouts.master')

@section('title', 'Create Event')

@section('style')
    {{ HTML::style('/css/jquery.datetimepicker.css'); }}
    {{ HTML::style('/css/events_edit.css'); }}
@stop

@section('heading')
Create a New Event
@stop

@section('subheading')
...
@stop

@section('image_url')
'/img/pen.jpg'
@stop

@section('content')
{{ Form::open(array('action' => 'CalendarEventsController@store','files'=>true)) }}
    
        @include('calendarEvents.create-edit-form')

    {{ Form::close() }}
@stop

@section('js')
<script src="/js/Markdown.Converter.js"></script>
<script src="/js/Markdown.Sanitizer.js"></script>
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