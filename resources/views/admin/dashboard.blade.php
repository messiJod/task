<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <a class="btn btn-success">Add Company</a>
        <a class="btn btn-success">Show Company Table</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button  class="btn btn-primary mb-3" data-toggle="modal" data-target="#employee">Add Employee</button>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @include('employee.index')
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
@include('modals.add_employee')
