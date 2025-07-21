<h2>Berita Terkini</h2>
 <ul class="small_catg popular_catg wow fadeInDown">
<?php 
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
                                    
        $data = file_get_contents("https://cms2023.kemenag.go.id/api/news");
        $data = json_decode($data);
                                    
        $i=0;
        foreach($data->data as $k => $v){
            $title= $v->title;
            $published_at= $v->published_at;
            $preview= $v->preview;
            $img= $v->image->thumbnail;
            $link= $v->path;
                                       
?>
<?php
                                      
        if($i>=6) break;
                                    
?>
            <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><?php echo '<img src="' .$img. '" alt="..."/>';?> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="https://kemenag.go.id<?php echo $link; ?>"><?php echo $title; ?></a></h4>
                    <span class="meta_date"><?php echo $published_at; ?></span><br/>
                    <p><?php echo implode(' ', array_slice(explode(' ', $preview), 0, 13)) . "..."; ?><a href="https://kemenag.go.id<?php echo $link; ?>">selengkapnya</a>
                    </p>
                  </div>
                </div>
             </li>
<?php 
        $i++;
    }
                                    
    ?>
</ul>
            
            
