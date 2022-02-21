<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif
@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
    @endif

    <div class="container" width='50%'>
        <form action="/admin/futsal/{{$futsals->id}}" method="POST" enctype='multipart/form-data'>
        <h3>Edit the Futsal Information</h3>
            <hr width='50%'>
            @csrf

            @error('name')
            <div class="alert alert-danger">Please enter the name of futsal</div>
            @enderror
            @error('owner_name')
            <div class="alert alert-danger">Please enter the owner's name</div>
            @enderror
            @error('contact')
            <div class="alert alert-danger">Please add a contact number</div>
            @enderror
            <div align='left'>
            <h5>Name</h5>
            <input type="text" name="futsal_name" style="width: 500px;height: auto;" value="{{$futsals->futsal_name}}"><br>
            <h5>Owner Name</h5>
            <input type="text" name="owner_name" style="width: 500px;height: auto;" value="{{$futsals->owner_name}}">
            <h5>Contact</h5>
            <input type="text" name="contact" style="width: 500px;height: auto;" value="{{$futsals->contact}}">
            <div align='center' style="display: flex;justify-content: left; width: 60%; margin:10px">
                <div><h5>City</h5>
                    <select name="city">
                        <option value="{{$futsals->city}}">{{$futsals->city}}</option>
                    
                    </select></div>
                <div style='margin-left:200px'><h5>Area</h5>
                    <select name="area">
                    <option value="{{$futsals->area}}">{{$futsals->area}}</option>
                        <option value="Kapan">Kapan</option>
                        <option value="Gokarna">Gokarna</option>
                        <option value="Chabahil">Chabahil</option>
                        <option value="Jorpati">Jorpati</option>
                    </select></div>
            </div>
            
            <h5>Price</h5>
            <input type="number" name="price" style="width: 500px;height: auto;" value="{{$futsals->price}}">
            <div class="custom-file">
                <h5>Photo</h5>
                <input type="file" class="custom-file-input" id="inputGroupFile04"
                    aria-describedby="inputGroupFileAddon04" name="image">
            </div>
        </div>
            <br>
            <div>
                <button class="btn btn-success">Save Changes</button>
            </div>
        </form>
    </div>
</body>
</html>