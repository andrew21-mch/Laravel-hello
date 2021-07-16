<html>
<head>
<title>contact | Laravel</title>
<style>
body{
        background-color: cyan;
    }
    .form-group{

        width: 40%;
        background: rgba(0, 0, 0,.4);
    }
    .row1{
        padding: 1rem;
    }
    .row2{
        padding: 1rem;
    }
    .row3{
        padding: 1rem;
    }
    .row4{
        padding: 1rem;
    }
    </style>
</head>
    <body>
    <center>
        <form action="">
        <h1>Contact Us</h1>
        <div class="form-group">
            <div class="row1">
                <label for="name">Name</label>
                <input type="text" placeholder="Your Name">
            </div>
            <div class="row2">
                <label for="email">Email</label>
                <input type="text" placeholder="Your Email">
            </div>
            <div class="row3">
                <label for="sub">Subject</label>
                <input type="text" placeholder="Subject">
            </div>
            <div class="row4">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="25" rows="5"></textarea>
            </div>
            <div class="row4">
                <button type="submit">Send</button>
            </div>
            
            </div>
            
        </form>
    </center> 
    
    </body>
</html>