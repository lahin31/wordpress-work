<?php

class OurServiceMetaBox
{
    
    function service_Icon_Add()
    {
        $screens = ['ourservice'];
        foreach ($screens as $screen) {
            add_meta_box(
                'ML_Icon_Id',          // Unique ID
                'Add Icon For Services', // Box title
                [self::class, 'icon_html'],   // Content callback, must be of type callable
                $screen                  // Post type
            );
        }

    }


 function icon_html($post){
     $Icon_Show = get_post_meta( $post->ID , 'ML_Icon_Id', true);
 ?>
        <label for="ML_Icon"> Choose Your Service Icon :  </label>
        
          <select name="icon-class" class="wide-fat" id="ML_Icon" >
            <option value="">Please select icon</option>
            <option value="glyphicon glyphicon-tree-deciduous" <?php selected($Icon_Show,'glyphicon glyphicon-tree-deciduous') ?> > Deciduous </option>
            <option value="glyphicon glyphicon-fire" <?php selected($Icon_Show, 'glyphicon glyphicon-fire') ?> > Fire </option>
            <option value="glyphicon glyphicon-flash" <?php selected($Icon_Show, 'glyphicon glyphicon-flash') ?> > Flash </option>
          </select>

          
    <?php }
   


    function icon_save($post_id)
    {
         if (array_key_exists('icon-class', $_POST)) {
            update_post_meta(
                $post_id,
                'ML_Icon_Id',
                $_POST['icon-class']
            );
        }


    }





}


add_action('add_meta_boxes',['OurServiceMetaBox','service_Icon_Add']);
add_action('save_post', ['OurServiceMetaBox','icon_save']);






function Ruhel_Function()
{
   add_meta_box('LN_Ruhel_meta','Facebook Url','Ruhel_Callback','ourservice','','high');
}

add_action('add_meta_boxes','Ruhel_Function');


function Ruhel_Callback($post)
{ 
    $fbUrl = get_post_meta( $post->ID , 'LN_Ruhel_meta', true);

    ?>
  
    <label for="ruhelinputID"> Your Facebook Url :  </label>
    <input type="text" name="FacebookUrl" id="ruhelinputID" value="<?php echo $fbUrl; ?>">

<?php }



function Ruhel_Save_meta($post_id)
{
    if (array_key_exists('FacebookUrl', $_POST)) {
            update_post_meta(
                $post_id,
                'LN_Ruhel_meta',
                $_POST['FacebookUrl']
            );
        }
}

add_action('save_post','Ruhel_Save_meta');


















?>