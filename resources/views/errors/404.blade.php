<style>
    .container{
        margin-top: 2%;
    }
    #btn 
    {
        background-color: white;
        /* background-color: #4E944F !important; */
        color: #4E944F;
        height: 50px;
        border: 1px solid #4E944F;
        border-radius: 3px;
        transition: 1s ease-in-out;
        cursor: pointer;
    }
    #btn:hover
    {
        background-color: #4E944F;
        /* background-color: #4E944F !important; */
        color: white;
        height: 50px;
        border: 1px solid #4E944F;
        border-radius: 3px;
        transition: 1s ease-in-out;
        cursor: pointer;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<?php include "../public/includes/head.php";  ?>
<body>
    <div class="container">
        <center>
            <img src="/img/404.svg" width="400" />
            <br><br>
            <p><h4>La page <strong><i> <?php echo request()->path(); ?></i> </strong> que vous demandée est introuvable !!!</h4></p><br>
            <button id="btn">Retour en arriere</button>
        </center>
    </div>
</body>
<script>
    document.getElementById('btn').addEventListener('click', () => {
    history.back();
});

</script>
</html>