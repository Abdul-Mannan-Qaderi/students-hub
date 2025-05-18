<x-layout>
    <h2>Create Page</h2>
<form action="{{ route('students.store') }}" class="text-left" method="POST">
    @csrf
    <label for="name">Student name</label>
    <input type="text" name="name" id="name" required value="{{ old('name') }}">

    <label for="rank">Rank (0 - 100)</label>
    <input type="number" name="rank" id="rank" required value="{{ old('rank')}}">

    <label for="bio">Biography</label>
    <textarea rows="5" name="bio" id="bio" required >{{ old('bio') }}</textarea>

    <label for="tutor_id">Tutor</label>
    <select name="tutor_id" id="tutor_id">
        <option disabled selected value="">Select a Tutor</option>
        @foreach ($tutors as $tutor)
            <option value="{{ $tutor->id }}" {{ old('tutor_id') == $tutor->id ? 'selected' : '' }}>
                {{ $tutor->name }}
            </option>
        @endforeach
    </select>
    

    <button class="btn mt-4" type="submit">Create</button>

    @if ($errors->any())
    <ul class="px-4 py-2 bg-red-100">

        @foreach ($errors->all() as $error)
            <li class="my-2 text-red-500">{{ $error }}</li>
        @endforeach
    </ul>
    @endif


   

</form>
</x-layout>