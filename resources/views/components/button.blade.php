@props(['class' => null, 'children' => null, 'action' => null, 'type' => 'button'])
<button type="{{ $type }}"
    class="{{ $class }} text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">
        {{ $children }}
</button>
