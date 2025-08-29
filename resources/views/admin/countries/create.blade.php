<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('assets/admin/js/jquery-3.7.1.min.js')}}"></script>
</head>
<body>
    <h1>Create New Country</h1>







    <form action="{{ route('admin.country.store') }}" method="POST">
        @csrf

        <div id="country-list">
            <div class="row">
                <input type="text" name="country[]" placeholder="Country Name">
                <button type="button" class="add">+</button>
            </div>
        </div>

        <br>
        <button type="submit">Save Countries</button>
    </form>




<script>
    $(document).ready(function(){

    // Add new input row
    $(document).on('click', '.add', function(){
        $('#country-list').append(`
            <div class="row">
                <input type="text" name="country[]" placeholder="Country Name">
                <button type="button" class="remove">-</button>
            </div>
        `);
    });

    
    $(document).on('click', '.remove', function(){
        $(this).closest('.row').remove();
    });

});

</script>
</body>
</html>