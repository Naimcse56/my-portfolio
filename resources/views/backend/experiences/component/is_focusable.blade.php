@if ($row->is_focusable)
<span class="badge rounded-pill bg-info text-dark">Focusable</span>
@else
<span class="badge rounded-pill bg-warning text-dark">Not</span>
@endif