<?php

  //PrinHTML
  function PrintContent($content)
  {
    echo $content;
  }

  //Print in a secure way a content
  function PrintOut($value)
  {
      echo htmlentities($value);
  }
?>