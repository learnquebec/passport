<style>
    .defi-termine{
        color: #ccc;
    }
</style>
<div class="mb-3">
    <label class="form-label" for="titre">Titre</label>
    <input class="form-control" type="text" name="name_en" value="{{ old('name', $group->name) }}">
    @error('name_en')
        <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    Défis du groupe
    <table class="table">
        <thead>
        <th>Défi</th>
        <th>Date de début</th>
        <th>Date de la fin</th>
        <th>Statut</th>
    </thead>
    <tr>
        <td><a href="">Defi 2</a></td>
        <td>01/01/2022</td>
        <td>01/08/2022</td>
        <td>En cours</td>
    </tr>
    <tr class="defi-termine">
        <td><a href="">Defi 1</a></td>
        <td>01/01/2022</td>
        <td>01/06/2022</td>
        <td>Terminé</td>
    </tr>
    </table>
</div>
<div class="mb-3">
    <label class="form-label" for="categorie_id">Ajouter un défi</label>
    <select class="form-control" type="text" name="categorie_id">
        <option value="">Selectionner le défi</option>
        @foreach($defis as $defi)
        <option {{ old('defi_id', $group->defi_id) == $defi->id ? ' selected=selected ' : "" }} value="{{ $defi->id }}">{{ $defi->name }}</option>
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
