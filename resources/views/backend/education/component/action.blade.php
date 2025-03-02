<div class="btn-group">
    <a href="{{route('skills.edit', $row->id)}}" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
    <button type="button" onclick="deleteData('Skill', '{{ route('skills.delete') }}', {{ $row->id }})" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
</div>