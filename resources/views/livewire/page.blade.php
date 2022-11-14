<div>
    <div class="mid">
        <div class="shadow-sm p-3 m-5 bg-body w-50% rounded">
            <div class="d-flex">
                <input wire:model="name" type="test" class="form-control" placeholder="qui va la ?">
                <button wire:click="newVisiteur" class="btn btn-primary ms-3">Submit</button>
            </div>
        </div>
        <div class="ms-3">
            @foreach ($visiteurs as $visiteur)
                <h1>{{ $visiteur->name }}</h1>
            @endforeach
        </div>
    </div>
</div>
