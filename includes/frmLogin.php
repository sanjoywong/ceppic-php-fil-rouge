

<form action="index.php?page=login" method="post">

<div>
    <label for="username">User name :</label>
    <input type="text" id="username" name="username" value="anonymous" required/>
</div>
<div>
    <label for="password">mot de pass</label>
    <input type="password" id="password" name="password" required>
</div>
<div>
    <input type="reset" value="Effacer">
    <input type="submit" value="login">
</div>
<input type="hidden" name="frmLogin" />
</form>

