<x-layout>
    <x-page-heading>
        New Job
    </x-page-heading>

    <x-forms.form method="POST" action="/jobs">

        @csrf

        <x-forms.input label="title" name="title" placeholder="CEO" />
        <x-forms.input label="salary" name="salary" placeholder="$90,000 USD" />
        <x-forms.input label="location" name="location" placeholder="Winter Park, Florida" />

        <x-forms.select label="Schedule" name="schedule">
            <option default>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Feature (costs extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma seperated)" name="tags" placeholder="laracasts, video, education" />

        <x-forms.button>Submit</x-forms.button>
    </x-forms>
</x-layout>
