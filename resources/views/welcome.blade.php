<!DOCTYPE html>
<html>
<head>
    <title>Crud Demo</title>
</head>
<body>
<?php
    $values = App\register::all();
?>    

    <form action="{{ url('insert') }}" method="post" enctype="multipart/form-data">
        <table border="0" width="20%">
            <tr>
                {{ csrf_field() }}
                <td>Name</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" required></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="image" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
    <br><br>
   
    <table border="1" width="35%">
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
            @foreach($values as $val)
                <tr>
                    <td>{{ $val->name }}</td>
                    <td>{{ $val->email }}</td>
                    <td>{{ $val->phone }}</td>
                    <td><img src="{{ asset('public/uploads/images/'.$val->image) }}" style="width: 50px; height: 50px;" /></td>
                    <td><a href="{{ url('edit',array('id'=>$val->id)) }}">Edit</a></td>
                    <td><a href="{{ url('delete',array('id'=>$val->id)) }}">Delete</a></td>
                </tr>
            @endforeach
    </table>       
</body>
</html>
