<x-layout>
    <h2>Currently Available Students</h2>
    <ul>
        @foreach ($students as $student)
            <li>
                <x-card href="{{ route('students.show', $student->id) }}" :highlight="$student['rank'] > 70">
                    <h3>{{$student['name']}}</h3>
                </x-card>
            </li>
        @endforeach 
    </ul>
    {{ $students->links() }}
</x-layout>
