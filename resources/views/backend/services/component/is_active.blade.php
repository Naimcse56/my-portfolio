<div class="form-check-danger form-check form-switch">
    <input type="checkbox" id="active_checkbox{{ $row->id }}" class="form-check-input is_active" {{$row->is_active == 1 ? 'checked' : ''}} value="{{ $row->id }}">
</div>