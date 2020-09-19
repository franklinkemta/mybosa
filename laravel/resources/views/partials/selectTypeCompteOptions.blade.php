<?php 
    $options = array(
        ['value' => 'ETUDIANT', 'name' => 'Etudiant'],
        ['value' => 'ETABLISSEMENT', 'name' => 'Les options établissements' ],
        ['value' => 'CONSEILLER', 'name' => 'Proposer mes services d\'orientation' ],
    );
?>

@foreach ($options as $option)
    @if( $option['value'] == $selected)
        <option value="{{ $option['value'] }}" selected>{{ $option['name'] }}</option>
    @else
        <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
    @endif
@endforeach