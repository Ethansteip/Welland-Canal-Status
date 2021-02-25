
<div class="card bg-light mb-3 my-3 mx-4" style="min-width: 20rem; box-shadow: 0 6px 6px rgba(0,0,0,0.1);">
    @if ($bridge->status->last()->status === "Available")
        <div class="card-header" style='background: rgb(129, 210, 199);'>{{ $bridge->name }}</div>
    @elseif ($bridge->status->last()->status === "Raising Soon")
        <div class="card-header" style='background: rgb(181, 186, 208);'>{{ $bridge->name }}</div>
    @elseif ($bridge->status->last()->status === "--Work in Progress--")
        <div class="card-header" style='background: rgb(115, 137, 174);'>{{ $bridge->name }}</div>
    @else
        <div class="card-header" style='background: rgb(65, 103, 136);'>{{ $bridge->name }}</div>
    @endif
    <div class="card-body bg-light">
        <h5 class="card-title text-dark">{{ $bridge->location }}</h5>
        <p class="card-text text-dark">{{ $bridge->status->last()->status }}</p>
        <a href="bridge/{{ $bridge->id }}" class="btn btn-info">View</a>
    </div>
</div>
