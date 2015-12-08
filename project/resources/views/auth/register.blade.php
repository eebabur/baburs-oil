<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html>
        <head>
        <title>Babur's Oil</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form method="POST" action="/auth/register">
                    <div>
                        Name
                        <input type="text" name="name" value="{{ old('name') }}">
                    </div>

                    <div>
                        Email
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div>
                        Phone
                        <input type="text" name="phone" value="{{ old('phone') }}">
                    </div>

                    <div>
                        Address
                        <input type="text" name="address" value="{{ old('address') }}">
                    </div>

                    <div>
                        Password
                        <input type="password" name="password">
                    </div>

                    <div>
                        Confirm Password
                        <input type="password" name="password_confirmation">
                    </div>

                    <div>
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
