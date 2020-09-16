<?php 
    $options = array(
        ['value' => 'Marocain(e)', 'name' => 'Marocain(e)'],
        ['value' => 'Camerounais(e)', 'name' => 'Camerounais(e)' ],
    );
?>

@foreach ($options as $option)
    @if( $option['value'] == $selected)
        <option value="{{ $option['value'] }}" selected>{{ $option['name'] }}</option>
    @else
        <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
    @endif
@endforeach