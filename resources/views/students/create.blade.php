<x-layout>
    <h2>Create Page</h2>
<form action="{{ route('students.store') }}" class="text-left" method="POST">
    @csrf
    <label for="name">Student name</label>
    <input type="text" name="name" id="name" required>

    <label for="rank">Rank (0 - 100)</label>
    <input type="number" name="rank" id="rank" required>

    <label for="bio">Biography</label>
    <textarea rows="5" name="bio" id="bio" required></textarea>

    <label for="tutor_id">Tutor</label>
    <select name="tutor_id" id="tutor_id">
        <option disabled selected value="">Select a Tutor</option>
        @foreach ($tutors as $tutor)
            <option value="{{ $tutor->id }}"> {{ $tutor->name }}</option>
        @endforeach
    </select>

    <button class="btn mt-4" type="submit">Create</button>
</form>
</x-layout>