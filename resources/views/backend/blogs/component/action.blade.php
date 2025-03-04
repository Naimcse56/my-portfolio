<div class="btn-group">
    <a href="{{route('blogs.edit', $row->id)}}" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
    <a href="{{route('blogs.show', $row->slug)}}" class="btn btn-outline-warning" target="_blank"><i class="bi bi-pencil-square"></i></a>
    <button type="button" onclick="deleteData('Blog', '{{ route('blogs.delete') }}', {{ $row->id }})" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
</div>