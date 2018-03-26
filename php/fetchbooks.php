<?php
    $handle= mysql_connect("localhost", "root", "password");
    mysql_select_db("bookshaala");
    $query = "select * from book;";
    $result = mysql_query($query);
    $i=1;

    while($row = mysql_fetch_array($result))
    {
        if($i%3==1)
            echo '          <div class="row">'."\n";
        
        echo '              <div class="col-lg-4">'."\n";
        echo '              <div class="media">'."\n" ;
        echo '                  <a href="menu/"><img src="themes/assets/images/'.$row['dest'].'" style="width:200px;height:300px;"> </a>'."\n";
        echo '                  <h3 class="media-heading text-primary-theme">'.$row['name'].'</h3>'."\n";
        echo '                  <p>'.$row['author'].' | '.$row['subject'].'</p>'."\n";
        echo '                  <p><a class="btn btn-default" href="#" role="button">₹'.$row['price'].' Add to cart &raquo;</a></p>'."\n";
        echo '              </div>'."\n";
        echo '              </div>'."\n";
        
        if($i%3==0)
            echo "          </div>\n          <hr>\n";
        $i++;
    }
    if($i%3!=1)
        echo "          </div>\n          <hr>\n";
    mysql_close($handle);
?>