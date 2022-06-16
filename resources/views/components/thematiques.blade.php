<p>
    @foreach ($thematiques as $thematique)
        <a href="{{ route('risques.thematiques.index',['id' => $thematique->id]) }}" class="badge bg-primary">{{ $thematique->titre }}</a>
    @endforeach
</p>