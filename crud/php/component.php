<?php
    function inputElemenet($icon,$placeholder, $name,$value){
        $element = "
            <div class=\"input-group mb-2\">
            <div class=\"input-group-prepend\">
                <div class=\"input-group-text bg-warning\">$icon</div>
            </div>
                <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placeholder' class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\">
            </div>
        ";
        echo $element;
    }

    function buttonElement($btnId,$styleclass,$text,$name,$attr){
        $btn = "
            <button name='$name' '$attr' class='$styleclass' id='$btnId'>$text</button>
        ";

        echo $btn;
    }