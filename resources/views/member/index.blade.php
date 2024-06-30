<x-layout>
    <x-slot:heading>
        Display members 
    </x-slot:heading>
    <?php $sl=1 ?>
    @foreach ($members as $member)
        
        <a href="/member/{{$member->id}}" class="block hover:bg-gray-100 py-2 px-4">
        {{ $sl++ }}{{$member->name}} <small> {{$member->father}} </small>
        </a>
    @endforeach
    <div>
        {{$members->links()}}
    </div>
</x-layout>