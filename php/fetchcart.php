<?php
    $handle= mysql_connect("localhost", "root", "password");
    mysql_select_db("bookshaala");
    $query = "select * from cart;";
    $result = mysql_query($query);
    $i=1;

    echo "      <hr>\n\n";
    while($row = mysql_fetch_array($result))
    {
        
        echo '      <div class="row">'."\n";
        echo '      <div class="col-md-2">'."\n" ;
        echo '          <div class="checkbox">'."\n" ;
        echo '            <input type="checkbox" id="selection"><img src="themes/assets/images/hp.jpg" style="width:100px;height:150px;">'."\n" ;
        echo '          </div>'."\n" ;
        echo '      </div>'."\n" ;
        echo '      <div class="col-md-9">'."\n";

        echo '          <h2>'.$row['name'].'</h2>'."\n";
        echo '          <p>'.$row['author'].'</p>'."\n";
        echo '          <p>₹'.$row['price'].'</p>'."\n";
        echo '      </div>'."\n";
        echo '      </div>'."\n";
        echo '      <hr>'."\n";

        $i++;
    }

    mysql_close($handle);
?>