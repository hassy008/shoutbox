<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shout Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class='wrapper clr'>
    <header class="headsec clr">
        <h2>Basic shoutbox with PHP & MySQLi</h2>
    </header>
        <section class='content clr'>
            <div class='box'>
                <ul>
                   <li><span>5:30pm</span>-<b>Rumman</b>Hello, howdy</li> 
                   <li><span>5:30pm</span>-<b>Rumman</b>Hello, howdy</li> 
                   <li><span>5:30pm</span>-<b>Rumman</b>Hello, howdy</li> 
                   <li><span>5:30pm</span>-<b>Rumman</b>Hello, howdy</li> 
                   <li><span>5:30pm</span>-<b>Rumman</b>Hello, howdy</li> 
                   <li><span>5:30pm</span>-<b>Rumman</b>Hello, howdy</li> 
                   <li><span>5:30pm</span>-<b>Rumman</b>Hello, howdy</li> 
                   <li><span>5:30pm</span>-<b>Rumman</b>Hello, howdy</li> 
                   <li><span>5:30pm</span>-<b>Rumman</b>Hello, howdy</li> 
                   <li><span>5:30pm</span>-<b>Rumman</b>Hello, howdy</li> 
                   <li><span>5:30pm</span>-<b>Rumman</b>Hello, howdy</li> 
                   <li><span>5:30pm</span>-<b>Rumman</b>Hello, howdy</li> 
                </ul>
            </div>

            <div class="shoutbox clr">
                <form>
                    <table>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><input type="text" name="name" placeholder="Name Please" required/></td>
                        </tr>
                        <tr>
                            <td>Body</td>
                            <td>:</td>
                            <td><input type="text" name="body" placeholder="Say Something Please"required/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" value="Shout Loud"/></td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>   


        <footer class="footsec clr">
            <h2>&copy: Copy Rights Reserve</h2>
        </footer>    
    </div>
</body>
</html>