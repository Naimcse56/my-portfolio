<div class="form-check-danger form-check form-switch">
    <input type="checkbox" id="is_publish_checkbox{{ $row->id }}" class="form-check-input is_publish" {{$row->is_publish == 1 ? 'checked' : ''}} value="{{ $row->id }}">
</div>