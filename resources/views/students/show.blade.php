<x-layout>
    <h1 class="text-left">{{$student->name}}</h1>

    <div class="bg-gray-100 rounded text-left">
        <p><strong>Rank </strong> {{$student->rank}}</p>
        <p><strong>About me </strong></p>
        <p>{{$student->bio}}</p>
    </div>

    <div class="bg-white px-4 pb-4 pt-2 my-4 rounded text-left">
        <h3>Tutor Information</h3>
        <p><strong>Tutor Name </strong> {{$student->tutor->name}}</p>
        <p><strong>Address </strong>{{ $student->tutor->address }}</p>
        <p><strong>About the Tutor </strong></p>
        <p>{{$student->tutor->description}}</p>
    </div>


</x-layout>