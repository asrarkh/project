<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Jobs Requests') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="container" style="padding:3%;" >
                <table class="table table-hover text-center">
                    <thead>
                        <td>Name</td>
                        <td>Phone</td>
                        <td>major</td>
                        <td>Job</td>
                        <td>CV</td>
                        <td>Status</td>
                    </thead>
                    <tbody>
                        @foreach ($jobrequests as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->major}}</td>
                            <td>{{$item->job->name}}</td>
                            <td><a href="{{asset($item->cv)}}">Download CV</a></td>
                            <td>
                                @if ($item->status == 'Approved')
                                <a type="button" class="btn btn-success">Approved</a>
                                @elseif($item->status == 'Rejected')
                                <a type="button" class="btn btn-danger">Rejected</a>
                                @else
                                <a type="button" class="btn btn-success" href="/manager/jobs-requests/{{$item->id}}/approve">Approve</a>
                                <a type="button" class="btn btn-danger" href="/manager/jobs-requests/{{$item->id}}/reject">Reject</a>
                                @endif
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
