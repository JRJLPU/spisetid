<?php

/*
  Template Name: Forside
 */

get_header();
?>
<style type="text/css">
    .cf:before, .cf:after{
        content:"";
        display:table;
    }

    .cf:after{
        clear:both;
    }

    .cf{
        zoom:1;
    }    


    /* Form wrapper styling */
    .form-wrapper {
        width: 450px;
        padding: 15px;
        margin: 50px auto 17px auto;
        background: #444;
        background: rgba(0,0,0,.2);
        border-radius: 10px;
        box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
    }

    /* Form text input */

    .form-wrapper input {
        width: 330px;
        height: 20px;
        padding: 10px 5px;
        float: left;    
        font: bold 15px 'lucida sans', 'trebuchet MS', 'Tahoma';
        border: 0;
        background: #eee;
        border-radius: 3px 0 0 3px;      
    }

    .form-wrapper input:focus {
        outline: 0;
        background: #fff;
        box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
    }

    .form-wrapper input::-webkit-input-placeholder {
        color: #999;
        font-weight: normal;
        font-style: italic;
    }

    .form-wrapper input:-moz-placeholder {
        color: #999;
        font-weight: normal;
        font-style: italic;
    }

    .form-wrapper input:-ms-input-placeholder {
        color: #999;
        font-weight: normal;
        font-style: italic;
    }    

    /* Form submit button */
    .form-wrapper button {
        overflow: visible;
        position: relative;
        float: right;
        border: 0;
        padding: 0;
        cursor: pointer;
        height: 40px;
        width: 110px;
        font: bold 15px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
        color: #fff;
        text-transform: uppercase;
        background: #cd834a;
        border-radius: 0 3px 3px 0;      
        text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
    }   

    .form-wrapper button:hover{		
        background: #eaa02e;
    }	

    .form-wrapper button:active,
    .form-wrapper button:focus{   
        background: #c42f2f;
        outline: 0;   
    }

    .form-wrapper button:before { /* left arrow */
        content: '';
        position: absolute;
        border-width: 8px 8px 8px 0;
        border-style: solid solid solid none;
        border-color: transparent #cd834a transparent;
        top: 12px;
        left: -6px;
    }

    .form-wrapper button:hover:before{
        border-right-color: #eaa02e;
    }

    .form-wrapper button:focus:before,
    .form-wrapper button:active:before{
        border-right-color: #c42f2f;
    }      

    .form-wrapper button::-moz-focus-inner { /* remove extra button spacing for Mozilla Firefox */
        border: 0;
        padding: 0;
    }    
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Søg efter dit måltid </h1>
            <p class="lead">Her kan du indtaste dine igredienser, og lade spisetid.nu finde dit næste måltid...</p>
            <?php //echo do_shortcode("[huge_it_slider id='2']"); ?>
            <form class="form-wrapper cf">
                <input type="text" placeholder="Skriv dine ingredienser her...">
                <button type="submit">Søg</button>
            </form>
        </div>
    </div>
</div>
<?php get_footer(); ?>