<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    $values = App\register::all();
?> 
    <form action="{{ route('edit')}}" method="post">
        <table border="0" width="20%">
            <tr>
                {{ csrf_field() }}
                <td>Name</td>
                <td><input type="text" name="name" value="{{ $var->name }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="{{ $var->email }}"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" value="{{ $var->phome }}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
    <br><br>
</body>
</html>
