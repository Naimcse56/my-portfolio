<div class="form-check-danger form-check form-switch">
    <input type="checkbox" id="is_featured_checkbox{{ $row->id }}" class="form-check-input is_featured" {{$row->is_featured == 1 ? 'checked' : ''}} value="{{ $row->id }}">
</div>