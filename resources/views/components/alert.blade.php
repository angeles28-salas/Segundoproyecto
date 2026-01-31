@props(['type'->'Info'])
@php
    switch ($type) {
        case 'Info':
            $title = $title ?? 'Info alert';
            $class = "text-blue-800 bg-blue-50 dark:text-blue-300";
            break;
        case 'Danger':
            $title = $title ?? 'Danger alert';
            $class = "text-red-800 bg-red-50 dark:text-red-300";
            break;
         case 'Warning':
            $title = $title ?? 'Warning alert';
            $class = "text-green-800 bg-green-50 dark:text-green-300";
            break;
        case 'Success':
            $title = $title ?? 'Success alert';
            $class = "text-green-800 bg-green-50 dark:text-green-300";
            break;
        default:
            $title = $title ?? 'Info alert|';
            $class="text-blue-800 bg-blue-50 dark:text-blue-300";   
    }
@endphp
<div {{$atributes->merge {['class'->'p-4 text-sm rounded-lg .$class']}}} role-"alert">
    