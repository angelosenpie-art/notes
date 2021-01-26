<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title"
        @if (isset($note))
        value="{{$note->title}}"
        @endif
    >
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea type="text" name="description" placeholder="Description" class="form-control" id="description"
    >{{isset($note) ? $note->description : ""}}</textarea>
</div>
<div class="form-group">
    <label for="schedule">Schedule</label>
    <input type="date" name="schedule" class="form-control" id="schedule"
        @if (isset($note) && $note->schedule)
        value="{{$note->schedule->format('Y-m-d')}}"
        @endif
    >
</div>
