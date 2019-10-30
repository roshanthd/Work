<html>
<head> 
<style>
form{
    margin : 100px;
    color: white;
    text-align :center;
    font-size: 20px;
}
body{
    background-image: linear-gradient(rgba(100, 28, 28, 0.912), rgba(11, 44, 129, 0.5));
}
h1{
    font-family: 'Allerta Stencil';
    color:white;
    font-size: 60px;
}
input{
    font-size: 20px;
    padding :10px;
}
#button:hover{
    background-color:rgba(34, 105, 168, 0.712);
    border-color: rgb(126, 126, 151);
    border: 2px;
}
#button{
    background-color:rgba(83, 105, 231, 0.815);
    border-color:royalblue;
    color:white;
    cursor: pointer;
    margin:20px;
}

</style>
</head>
<body>
<h1> User information </h1>
    <form action="/tutorial4/index.php//UserController/ShowUser" method=post>
        <!-- <label>User ID </label><input type="text" required name="user_id"> -->
        <label>Action Title </label><input type="text" required name="action_title"><br>
        <input id="button" type="submit" value="Submit">
    </form>
</body>
</html>
