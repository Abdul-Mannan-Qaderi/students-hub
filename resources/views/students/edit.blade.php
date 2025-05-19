<x-layout>
  <h2>Create Page</h2>
  <form action="{{ route('students.update', $student->id) }}" method="POST" class="text-left">
    @csrf
    @method('PUT') <!-- Required for updating -->

    <label for="name">Student name</label>
    <input type="text" name="name" id="name" required value="{{ $student->name }}">

    <label for="rank">Rank (0 - 100)</label>
    <input type="number" name="rank" id="rank" required value="{{ $student->rank }}">

    <label for="bio">Biography</label>
    <textarea rows="5" name="bio" id="bio" required>{{ $student->bio }}</textarea>

    <label for="tutor_id">Tutor</label>
    <select name="tutor_id" id="tutor_id" required>
        <option disabled value="">Select a Tutor</option>
        @foreach ($tutors as $tutor)
            <option value="{{ $tutor->id }}" {{ $student->tutor_id == $tutor->id ? 'selected' : '' }}>
                {{ $tutor->name }}
            </option>
        @endforeach
    </select>

    <button class="btn mt-4" type="submit">Update</button>

    @if ($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach ($errors->all() as $error)
                <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</form>

</x-layout>