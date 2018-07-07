<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>validation</title>
        <meta name="description" content="">
        <meta name="author" content="Hp">

        <meta name="viewport" content="width=device-width; initial-scale=1.0">

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <script src="validation .js"></script>
    </head>

    <body>
        <div>
            <header>
                <h1>validation</h1>
            </header>
            <nav>
                <p>
                    <a href="/">Home</a>
                    
                </p>
               <p>
                <a href="/contact">Contact</a>
               </p>
            </nav>

            <div>

            </div>
            <form method='post' action='testing.html' name='#'>
<input type='text' id='name' name='name' onkeyup='validate(this);' onfocus='this.select();'
onblur='search();' value='First and Last Name' />
<input type='text' id='phone' name='phone' onkeyup='validate(this);' onfocus=
'this.select();' onblur='search();' value='Phone Number' />
</form>

            <footer>
                <p>
                    &copy; Copyright@2014 by Sammy Mutisya
                 
                </p>
            </footer>
        </div>
    </body>
</html>
