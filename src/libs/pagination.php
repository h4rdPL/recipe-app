<?php


    $result_per_page = 3;

function get_recipes() {
    include '../src/libs/db_connect.php';

    $query = "SELECT * FROM recipes";
    $result = mysqli_query($conn, $query);
    $num_of_result = mysqli_num_rows($result);
    echo 'suma'. $num_of_result.'<br>';
    get_num_of_pages($num_of_result);
}
function set_the_limit($page) {
    include '../src/libs/db_connect.php';

    $result_per_page = 3;

    $current_visible_element = ($page -1) * $result_per_page;
    $query_limit = 'SELECT * FROM recipes LIMIT ' . $current_visible_element . ','. $result_per_page;
    show_recipes($query_limit);

    
    
}
function get_num_of_pages($num_of_result) {

    $result_per_page = 3;

    $num_of_pages = ceil($num_of_result/$result_per_page);
    show_pagination($num_of_pages);
    get_current_page();

}


function get_current_page() {

    if(!isset($_GET['page'])) {
        $page = 1;
    } else {
         $page = $_GET['page'];
    }
    set_the_limit($page);
}


function show_recipes($query_limit) {
    include '../src/libs/db_connect.php';

    $result_2 = mysqli_query($conn, $query_limit);
    while($row = mysqli_fetch_array($result_2)) {
        echo $row['recipe_id']. ' '. $row['name']. '<br>';
    }
}
function show_pagination($num_of_pages) {

    ?>
    <ul class="pagination" style="justify-content:center;">
    <?php
    for($page=1;$page <=$num_of_pages;$page++) : ?>
        <li class="pagination__link <?php check_if_exists_class($page) ?>">
        <a class="pagination__link__item" href="<?php echo "allrecipes_changed.php?page=".$page ?>"><?php echo $page ?></a>
        </li>

    <?php endfor ?>
    </ul>
    <?php
}

function check_if_exists_class($page) {
    if($_GET['page'] == $page) {
         echo "pagination__link-active";
     } 
 
 }
 

function get_pagination() {

    get_recipes();
}

?>