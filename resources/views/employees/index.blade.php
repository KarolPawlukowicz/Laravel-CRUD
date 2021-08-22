<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <h1 class="text-4xl font-bold mb-4">Employees</h1>

        <a href="/employees/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Employee</a>

        @foreach($employees as $employee)
            <article class="mb-2">
                <a href="/employees/{{ $employee->id }}/edit" class="text-xl font-bold text-blue-500">{{ $employee->name }}</a>
                <p class="text-md text-gray-600">{{ $employee->email }}</p>
                <p class="text-md text-gray-600">{{ $employee->experience }}</p>
                <p class="text-md text-gray-600">{{ $employee->salary }}</p>

                <hr class="mt-2">
            </article>
        @endforeach
    </div>
</body>
</html>