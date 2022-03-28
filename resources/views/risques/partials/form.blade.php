
<div class="mb-3">
    <label class="form-label" for="titre">Titre</label>
    <input class="form-control" type="text" name="title_en" value="{{ old('titre', $risque->titre) }}">
    @error('title_en')
        <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label" for="categorie_id">Catégorie</label>

    <select class="form-control" type="text" name="categorie_id">
        <option value="">Selectionner la catégorie</option>
        @foreach($categories as $categorie)
        <option {{ old('categorie_id', $risque->categorie_id) == $categorie->id ? ' selected=selected ' : "" }} value="{{ $categorie->id }}">{{ $categorie->titre }}</option>
        @endforeach
    </select>
</div>

@if($errors->any())
    <div class="is-invalid">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
