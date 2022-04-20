<table class="table table-striped " id="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Nom</th>
            <th>Catégorie</th>
            <th>Tarif</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @forelse($services as $service)
        <tr>
            <th>{{ $loop->index + 1 }}</th>
            <td><img src="{{ asset('storage/'.$service->picture) }}" alt="" class="img-thumbnail"  style="width: 250px; height: 100px; background-color: white;"></td>
            <td>{{ $service->name }}</td>
            <td>{{ $service->prestation->nom }}</td>
            <td>{{ $service->price }}</td>
            <td>{!! $service->description !!}</td>
            <td>
                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary">Editer</a>
                <form action="{{ route('services.destroy', $service->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger"  onclick="return confirm('Cette action est irreversible. Etes vous sûr de vouloir supprimer ce service ?');">Supprimer</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="text-center">Aucun service ajouté</td>
        </tr>
    @endforelse
    </tbody>
</table>