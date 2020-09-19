<?php 
    $options = array(
        ['value' => 'MAROC', 'name' => 'Marocain(e)'],
        ['value' => 'CAMEROUN', 'name' => 'Camerounais(e)' ],
    );
?>

@foreach ($options as $option)
    @if( $option['value'] == $selected)
        <option value="{{ $option['value'] }}" selected>{{ $option['name'] }}</option>
    @else
        <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
    @endif
@endforeach