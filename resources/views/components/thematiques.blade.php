<p>
    @foreach ($thematiques as $thematique)
        <a href="{{ route('risques.thematiques.index',['id' => $thematique->id]) }}" class="badge badge-success badge-lg">{{ $thematique->titre }}</a>
    @endforeach
</p>