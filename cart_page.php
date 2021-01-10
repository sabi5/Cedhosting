<?php 
    session_start();
    // session_destroy();
    get_header();
    // print_r($_SESSION['cart_Array']);
    //Condition for add product
    if (isset($_SESSION['cart_Array'])) {
        if(isset($_POST['add_to_cart'])){
            $product_title = get_the_title();
            $post_id = get_the_ID();
            // echo $post_id;

            $price = $_POST['price'];
            // echo $price."</br>";

            $inventory = $_POST['inventory'];
            // echo $inventory."</br>";

            $arr=array('post_id'=> $post_id, 'title'=> $product_title, 'price' => $price, 'image' => get_the_post_thumbnail_url(get_the_ID()), 'inventory' => $inventory);
            // array_push($_SESSION['cart_Array'], $arr);
            $_SESSION['cart_Array'] = $arr;
        
            // print_r($arr); echo "</br>";
            // print_r($_SESSION['cart_Array']);
            // print_r(  $_SESSION['cart_Array']['post_id']);
            foreach ($_SESSION['cart_Array'] as $key=>$value) {
                // print_r($key);
                // echo ($_SESSION['cart_Array'][$key][$value]['price']);
                // print_r($value);
                echo '</pre>';
                // print_r($post_id);
                // foreach($value as $v){
                    // print_r($v);
                    // print_r($value['price']);
                    if($_SESSION['cart_Array']['post_id'] == $post_id){
                        // echo "hello";
                    //    echo ( $_SESSION['cart_Array']['inventory']);
                        // $_SESSION['cart_Array']['inventory'] += 1;
                       $in = $_SESSION['cart_Array']['inventory'] + 1;
                       echo $in;
                        // $arr=array('post_id'=> $post_id, 'title'=> $product_title, 'price' => $price, 'image' => get_the_post_thumbnail_url(get_the_ID()), 'inventory' => $inventory);
                        // array_push($_SESSION['cart_Array'], $arr);
                        // array_push($_SESSION['cart_Array'], $arr);
                        // print_r( $_SESSION['cart_Array']);
                        //  return;
                    }
                    // echo "jii";
                // }

                // print_r( $_SESSION['cart_Array']);
                // if($value == $post_id){
                //     echo "hello";
                //     $_SESSION['cart_Array']['inventory'] += 1;
                //      return;
                // }

            }
            
           
        }
    } else {
             $_SESSION['cart_Array'] = array();
    }
    print_r($_SESSION['cart_Array']);
    // echo get_the_ID();
    // if(isset($_POST['add_to_cart'])){
    //     $product_title = get_the_title();
    //     $post_id = get_the_ID();
    //     echo $post_id;

    //     // echo $product_title."</br>";

    //     // $image =  get_the_post_thumbnail_url( get_the_ID(), the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft border' ) ));
    //     // echo $image."</br>";
        

    //     $price = $_POST['price'];
    //     // echo $price."</br>";

    //     $inventory = $_POST['inventory'];
    //     // echo $inventory."</br>";

        

    //     $arr=array('id'=> $post_id, 'title'=> $product_title, 'price' => $price, 'image' => get_the_post_thumbnail_url( get_the_ID()), 'inventory' => $inventory);

    //     $_SESSION['cart_Array'] = $arr;
       
    //     print_r($arr);
        
    //     echo "</br>";

        
    //     $user_id = get_current_user_id();
    //     echo $user_id;
    //     echo "</br>";

    //     // $userdata = get_userdata( $user_id );
    //     // print_r($userdata);

    //     // foreach ($userdata as $user) {  
    //     //     $meta_key = $user->meta_key;         
    //     //   }

    //     //   echo $meta_key;
    //     $user_meta = get_user_meta( $user_id, 'add_cart' , false);
    //    print_r($user_meta);
    //    echo "</br>";
    

    //     if(!empty($user_id)){

    //         foreach ($_SESSION['cart_Array'] as $key => $val){
    //             print_r($val);
    //             if($product_title == $val ){
    //                 $inventory = $inventory++;
    //                 echo $inventory;

    //                 update_user_meta( $user_id, 'add_cart', $arr );
    //             }
            
    //         }
            

    //     }else{
    //         $_SESSION['cart_Array'] = $arr;
    //         // print_r($_SESSION['cart_Array']);
    //         echo "</br>";
          
    //     }

    //     // die("add");
    //     // echo get_post_meta(get_the_ID(), 'price_discount_key', true);
    // }

    
?>
    <form method="post">
    <table>
        <tr>
            <th>Title</th>
            <th>Product</th>
            <th>Inventory</th>
            <th>Price</th>
            <th>Add to cart</th>
        </tr>

        <tr>
            <td>
                <div class="post">
                <h2 class="title"><a href="<?php the_permalink();?>" ><?php the_title();?> </a></h2>    
            </td>

            <td>
                <div class="entry">
                   
                    <p><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft border' ) );?><?php echo the_content();?></p>
                
                </div>
                
            </td>
            
            <td>
                <input type="hidden" name = "inventory" value = "<?php echo get_post_meta(get_the_ID(), 'inventory_meta_key', true);?>">
                <?php echo get_post_meta(get_the_ID(), 'inventory_meta_key', true);?>
               
            </td>

            <td>
                <?php 
                if((get_post_meta(get_the_ID(), 'price_discount_key', true)) == 0 || (get_post_meta(get_the_ID(), 'price_discount_key', true)) == " " ){ ?>
                          <input type="hidden" name = "price" value = "<?php echo get_post_meta(get_the_ID(), 'price_meta_key', true);?>"><?php

                        echo get_post_meta(get_the_ID(), 'price_meta_key', true);
                        }else{?>
                            <input type="hidden" name = "price" value = "<?php echo get_post_meta(get_the_ID(), 'price_discount_key', true);?>">
                       <?php echo get_post_meta(get_the_ID(), 'price_discount_key', true); }?>
                <br>
            </td>
       
            <td>
                <p>
                    <input type="submit" name = "add_to_cart" value = "Add To Cart" id = "<?php echo get_the_ID();?>">
                </p>
            </td>
        </tr>
    </table>
    </form>
<?php
    get_footer();
?>