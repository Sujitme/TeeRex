<?php
if (isset($_POST["submit_btn"])){
    $_POST_data = file_get_contents('https://dev.29kreativ.com/recruitment/levels/'); 
    echo "<div> POST BODY <br>" .$post_data. "</div>";
}
?>
