<div class="mydiv" class="one">
    @if ($bridge->status->last()->status === "Available")
        <div class="available">
    @elseif ($bridge->status->last()->status === "Raising Soon")
        <div class="raisingsoon">
    @elseif ($bridge->status->last()->status === "--Work in Progress--")
        <div class="wip">
    @else
        <div class="fullyraised">
    @endif
        <h2>{{ $bridge->location }}</h2>
    </div>
    <h6>{{ $bridge->name }}</h6>
    <h3>{{ $bridge->status->last()->status }}</h3>
</div>
