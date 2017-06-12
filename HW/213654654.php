<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="js/bootstrap.js" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
        background-size: cover;
        background-image: url('./img/chair.png')
    }
    div{
        font-family: sans-serif;
    }
</style>
<script>

    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    function precheck() {
        var account =
            document.getElementById('account').value;
        //alert(account);
        xmlhttp.onreadystatechange = callBack1;
        xmlhttp.open("GET", "789.php?a="+account, true);
        xmlhttp.send();
    }
    function callBack1() {
        if (this.readyState == 4 && this.status == 200) {
            var result = this.responseText;
            if (result != 'OK'){
                document.getElementById('crs').innerHTML = '已存在';
            }else{
                document.getElementById('crs').innerHTML = '很好';
            }
        }
    }

</script>
<body>

<!--<form action="963.php">-->
<!--    <input id='account' name="account" onblur="precheck()" />-->
<!--    <span id="crs"></span><br>-->
<!--    <input type="password" name="passwd" /><br>-->
<!--    <input name="rname" /><br>-->
<!--    <input type="submit" value="add" />-->
<!--</form>-->

<div class="container">
    <form action="963.php">
        <div class="form-group">
            <label for="account">Account:</label>
            <input type="text" class="form-control" id="account" placeholder="Enter account" name="account" onblur="precheck()" />
           <span id="crs"></span><br>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="passwd" >
            <span ></span><br>
        </div>
        <div class="form-group">
            <label for="uname">UserName:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter User Name" name="rname" >
            <span ></span><br>
        </div>

        <div><input type="submit" class="btn btn-default" value="Submit"></div>

      </form>
</div>


</body>