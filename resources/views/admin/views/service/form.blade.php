@csrf
<div class="form-group">
    <label>Nom : </label>
    <input type="text" name="name" value="{{ old('name') ?? $service->name }}" class="form-control input-default @error('name') is-invalid @enderror">
    @error('name') 
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label>Prestations : </label>
    
    <select name="prestation_id" id="prestation_id" class="form-control @error('prestation_id') is-invalid @enderror">
        @forelse ($prestations as $prestation)
            <option value="{{$prestation->id}}" @if($service->prestation_id == $prestation->id) selected @endif>{{$prestation->nom}}</option>
        @empty
            <option value="">Aucun service disponible</option>
        @endforelse
    </select>
    @error('prestation_id') 
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label>Tarif : </label>
    <input name="price" value="{{ old('price') ?? $service->price }}" class="form-control @error('price') is-invalid @enderror">
    @error('price') 
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label>Description : </label>
    <textarea class="form-control editor @error('description') is-invalid @enderror" rows="10" id="description" name="description">{{ $service->description }}</textarea>
    @error('description') 
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<img src="" id="picture" alt="">
<div class="form-group">
    <label for="picture">Image </label>
    <input type="file" class="form-control-file @error('picture') is-invalid @enderror" name="picture" accept="image/*" id="picture" @if(request()->routeIs('services.create')) required @endif>
    @error('picture') 
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>