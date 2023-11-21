<html>
    <head></head>
    <body>
        <form action="addSupervisor" method='POST'>
            @csrf
            <label for="First_Name">First Name</label>
            <input name="First_Name" type="text">

            <label for="Last_Name">Last Name</label>
            <input name="Last_Name" type="text">

            <label for="Email">Email</label>
            <input name="Email" type="text">

            <label for="Phone">Phone</label>
            <input name="Phone" type="text">

            <label for="Password">Password</label>
            <input name="Password" type="text">

            <button type="submit">Register AdminSupervisor
    </body>
</html>