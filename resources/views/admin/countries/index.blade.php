<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contires list</title>
     <style>
        table, th, td { border: 1px solid #ccc; border-collapse: collapse; padding: 5px; }
        .row { margin-bottom: 5px; }
        .remove { color: red; cursor: pointer; margin-left: 5px; }
    </style>
</head>
<body>
    <!-- Countries Table -->

    <a href="{{route('admin.country.create')}}"> click to add New</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Country Name</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse($countries as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->name }}</td>
            <td>{{ $country->status }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No countries found.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</body>
</html>