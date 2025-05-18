<x-layout>
    <h2>Currently Available Students</h2>
    <ul>
        @foreach ($students as $student)
            <li>
                <x-card href="{{ route('students.show', $student->id) }}" :highlight="$student['rank'] > 70">
                    <div>
                        <h3>{{$student->name}}</h3>
                        <p>{{$student->tutor->name}}</p>
                        <p>{{$student->tutor->description}}</p>
                    </div>
                </x-card>
            </li>
        @endforeach 
    </ul>
    {{ $students->links() }}
</x-layout>
