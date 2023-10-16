<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Create Job') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="container" style="padding:3%;" >
                <form action="/manager/jobs/store" method="POST" style="width: 50%;margin-left:auto;margin-right:auto">
                    @csrf

                        <div class="form-group">
                        <label for="formGroupExampleInput">Job Name:</label>
                        <input type="text" class="form-control"  name="name">
                        </div>
                        <div class="form-group">
                        <label for="major">Status<span>*</span></label>
                        <select id="is_active"class="form-control" name="is_active">
                                <option value="1">Active</option>
                                <option value="0">Disabled</option>
                        </select>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <button style="width: 100%;" class="btn btn-primary btn-block" type="submit">Save</button>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
