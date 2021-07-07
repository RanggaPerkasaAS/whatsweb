<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whatsweb</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet"> 
</head>
<body>
    <div class="wrapper">
        <section class="konten">
            <h1 class="h1">Whatsweb</h1>
            <p class="p">WhatsWeb chat real time yang membantu anda terhubung dengan semua orang</p>
        </section>
        <section class="form signup">
            <header>Whatsweb</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                <div class="field input">
                    <label>first Name</label>
                    <input type="text" placeholder="First name"></input>
                </div>
                <div class="field input">
                    <label>Last Name</label>
                    <input type="text" placeholder="Last name"></input>
                </div>
            </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" placeholder="Enter your Email address"></input>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="text" placeholder="Enter new password"></input>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select image</label>
                    <input type="file"></input>
                </div>
                <div class="field button">
                    <input type="submit" value="Signup"></input>
                </div>
                <div class="link">
                    Already sign up? 
                    <a href="http://127.0.0.1:5500/login.html">Login now!</a>
                </div>
            </form>
        </section>
    </div>
</body>
</html>