<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Jobs') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="container" style="padding:3%;" >
                <table class="table table-hover">
                    <thead>
                        <td>Job Name</td>

                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)
                        <tr>
                            <td>{{$job->name}}</td>
                            <td>
                                <a type="button" class="btn btn-info" href="/manager/jobs/{{$job->id}}/edit">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <a type="button"  class="btn btn-primary btn-lg" href="/manager/jobs/create">Add Job</a>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
