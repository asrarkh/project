<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container" style="padding:3%;" >
                    <form action="/apply-job" method="POST" enctype="multipart/form-data" style="width: 50%;margin-left:auto;margin-right:auto">
                        @csrf
                            <div class="form-group">
                            <label for="formGroupExampleInput">Name:</label>
                            <input type="text" class="form-control"  name="name" >
                            </div>
                            <div class="form-group">
                            <label for="formGroupExampleInput2">major:</label>
                            <input type="text" class="form-control" name="major">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Job:</label>
                                <select class="form-control" name="job_id">
                                    @foreach ($jobs as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Phone Number:</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">CV</label>
                                <input type="file" class="form-control" name="cv">
                            </div>
                            <br><br>
                            <div class="form-group">
                                <button style="width: 100%;" class="btn btn-primary btn-block" type="submit">Apply Job</button>
                            </div>
                        {{-- <fieldset> --}}

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
