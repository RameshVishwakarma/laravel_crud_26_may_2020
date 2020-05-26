<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ url('edit', $data->id) }}" method="post" enctype="multipart/form-data">
        <table border="0" width="20%">
            <tr>
                {{ csrf_field() }}
                <td>Name</td>
                <td><input type="text" name="name" value="{{ $data->name }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="{{ $data->email }}"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" value="{{ $data->phone }}"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="image" value="{{ $data->image }}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
