<?php 
    $options = array(
        ['value' => 'MA', 'name' => 'Maroc'],
        ['value' => 'CM', 'name' => 'Cameroun' ],
    );
?>

@foreach ($options as $option)
    @if( $option['value'] == $selected)
        <option value="{{ $option['value'] }}" selected>{{ $option['name'] }}</option>
    @else
        <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
    @endif
@endforeach