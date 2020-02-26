<?php
    class NovemaxBasic {
        
        function downClass($array) {
            if($array["class"] != "") 
            echo " class=".$array["class"];
        }
        
        function downAlign($array) {
            if($array["align"] != "") 
            echo " align=".$array["align"];
        }
        
        function downBorder($array) {
            if($array["border"] != "") 
            echo " border=".$array["border"];
        }
        
        function downDir($array) {
            if($array["dir"] != "") 
            echo " dir=".$array["dir"];
        }
        
        function downHeight($array) {
            if($array["height"] != "") 
            echo " height=".$array["height"];
        }
        
        function downHspace($array) {
            if($array["hspace"] != "") 
            echo " hspace=".$array["hspace"];
        }
        
        function downId($array) {
            if($array["id"] != "") 
            echo " id=".$array["id"];
        }
        
        function downOnClick($array) {
            if($array["onclick"] != "") 
            echo " onclick=".$array["onclick"];
        }
        
        function downOnDbClick($array) {
            if($array["ondbclick"] != "") 
            echo " ondbclick=".$array["ondbclick"];
        }
        
        function downOnKeyDown($array) {
            if($array["onkeydown"] != "") 
            echo " onkeydown=".$array["onkeydown"];
        }
        
        function downOnKeyPress($array) {
            if($array["onkeypress"] != "") 
            echo " onkeypress=".$array["onkeypress"];
        }
        
        function downOnKeyUp($array) {
            if($array["onkeyup"] != "") 
            echo " onkeyup=".$array["onkeyup"];
        }
        
        function downOnMouseDown($array) {
            if($array["onmousedown"] != "") 
            echo " onmousedown=".$array["onmousedown"];
        }

        function downOnMouseMove($array) {
            if($array["onmousemove"] != "") 
            echo " onmousemove=".$array["onmousemove"];
        }
        
        function downOnMouseOut($array) {
            if($array["onmouseout"] != "") 
            echo " onmouseout=".$array["onmouseout"];
        }
        
        function downOnMouseOver($array) {
            if($array["onmouseover"] != "") 
            echo " onmouseover=".$array["onmouseover"];
        }
        
        function downOnMouseUp($array) {
            if($array["onmouseup"] != "") 
            echo " onmouseup=".$array["onmouseup"];
        }        
                
        function downWidth($array) {
            if($array["width"] != "") echo " width=".$array["width"];
        }       
        
    }
?>