@foreach($episodes as $ep){
{{$ep->nom}};
saison : {{$ep->saison}};
{{$ep->duree}};
<img src={{$ep->urlImage}}>;
}
@endforeach