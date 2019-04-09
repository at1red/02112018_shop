<?php
      
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');
    
    

    $page = (int) $_GET['page'];
    $section =  (isset($_GET['section'])) ? $_GET['section'] : 'man';
    $name =  (isset($_GET['name'])) ? $_GET['name'] : 'Мужчина';
    $count_prodicts_on_page = 4;

    $all_products = [
        'cards' =>[],
        'pagination' =>[
            'countPage' => $count_prodicts_on_page,
            'nowPage' => $page
        ]
    ];
    
    // для теста обычного div preload
    sleep(3);
// ____________________________________________________________________________

    
    // $query = "SELECT * FROM `products` {$request_cat} ";

   
// ____________________________________________________________________________
    // $request_cat = ($_GET['categories_id'] != 0) ? "WHERE `categories_id` = {$_GET['categories_id']}" : '' ;

    

    $query_len = "
        SELECT COUNT(id) as len FROM products 
        WHERE id IN 
        (
            SELECT pc.product_id FROM section_header as p
            JOIN product_catalog as pc ON p.id=pc.catalog_id
            WHERE code = '{$section}' 
        )
    ";
    $count_products = mysqli_fetch_assoc (mysqli_query($db, $query_len))['len'];

    $all_products['pagination']['countPage'] = ceil($count_products / $count_prodicts_on_page);
    
    $num_start_products = ($page - 1) * $count_prodicts_on_page; 
    $query = "
        SELECT * FROM products 
        WHERE id IN 
            (
                SELECT pc.product_id FROM section_header as p
                JOIN product_catalog as pc ON p.id=pc.catalog_id
                WHERE code = '{$section}' 
            )
            LIMIT {$num_start_products}, {$count_prodicts_on_page} ";
    
    
    
    $products = mysqli_query($db, $query );
    
    // $productsCount = mysqli_num_rows($products);    

    while ($result = mysqli_fetch_assoc($products)) {
        $all_products['cards'][] = $result; 

    }

    // print_r($all_products);

    echo json_encode($all_products);


?>