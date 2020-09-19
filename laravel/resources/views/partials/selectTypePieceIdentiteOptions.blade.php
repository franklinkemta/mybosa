<?php 
    $options = array(
        ['value' => 'PASSEPORT', 'name' => 'Passeport'],
        ['value' => 'C.I.N', 'name' => 'C.I.N'],
        ['value' => 'C.I', 'name' => 'C.I' ],
    );
?>

@foreach ($options as $option)
    @if( $option['value'] == $selected)
        <option value="{{ $option['value'] }}" selected>{{ $option['name'] }}</option>
    @else
        <option value="{{ $option['value'] }}">{{ $option['name'] }}</option>
    @endif
@endforeach