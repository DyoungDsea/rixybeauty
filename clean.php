<?php
@session_start();

include 'config.php';

function clean($value){
    GLOBAL $conn;
      $value=trim($value);
      $value=htmlspecialchars($value);
      $value=strip_tags($value);
      $value = $conn->real_escape_string($value);
      return $value;                
  }

function findBaseName($data){
  if(basename($_SERVER["REQUEST_URI"])==$data){
    echo 'active';
  }
}

function findBaseNamex($data){
  if(basename($_SERVER["REQUEST_URI"])==$data){
    echo 'activex';
  }
}


function formatDate($data){
  return date("d M, Y", strtotime($data));
}

function limit_text($text,$limit){
  if(str_word_count($text, 0)>$limit){
      $word = str_word_count($text,2);
      $pos=array_keys($word);
      $text=substr($text,0,$pos[$limit]). '...';
  }
  return $text;
}