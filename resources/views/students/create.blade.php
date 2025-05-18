<x-layout>
    <h2>Create Page</h2>
<form action="" class="text-left">
    @csrf
    <label for="name">Student name</label>
    <input type="text" name="name" id="name" required>

    <label for="rank">Rank (0 - 100)</label>
    <input type="number" name="rank" id="rank" required>

    <label for="name">Biography</label>
    <textarea rows="5" name="bio" id="bio" required></textarea>

    <label for="tutor_id">Tutor</label>
    <select name="tutor_id" id="tutor_id">
        @foreach ($tutors as $tutor)
            <option value="{{ $tutor->name }}"> {{ $tutor->name }}</option>
        @endforeach
    </select>
</form>
</x-layout>