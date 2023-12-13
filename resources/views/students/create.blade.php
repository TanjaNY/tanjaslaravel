<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
</head>
<body>
    <h1>Add New Student</h1>

    <form action="/students" method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" placeholder="First Name">

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" placeholder="Last Name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email">

        <label for="address">Address:</label>
        <textarea id="address" name="address" placeholder="Address"></textarea>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" placeholder="Phone">

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" placeholder="Course">

        <label for="registered_at">Registered At:</label>
        <input type="date" id="registered_at" name="registered_at" placeholder="Registered At">

        <button type="submit">Submit</button>
    </form>
</body>
</html>


