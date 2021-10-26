<?php
    require_once('dbconnection.php');

    if(isset($_GET['Action']) && $_GET['Action']=='getPortfolio')
    {
        
        $CategoryID = $_GET['CategoryID'];
        $TagName = $_GET['Tag'];
        $page = @$_GET['page'];
        if(empty($page)){
            $page = 1;
        }
        $limit = 6;
        $offset = ($page-1)*$limit;
        
        $CategoryQuery = "";
        if($CategoryID != 'All')
        {   
        
            $CategoryQuery .= " AND category_id='$CategoryID'";
        }

        if($TagName != 'All')
        {
            $CategoryQuery .= " AND FIND_IN_SET('$TagName',tags)";
        }

         
        $sql = "SELECT portfolio.*,category.name FROM portfolio,category WHERE portfolio.category_id=category.id $CategoryQuery  AND portfolio.status=1 ";
        $res=mysqli_query($conn,$sql);
        $total_record = $res->num_rows;

        $sql.=" limit ".$offset.",".$limit;
        $res=mysqli_query($conn,$sql);
        $Response = array();
        $Output = "";
        if(mysqli_num_rows($res) > 0)
        {

            $Output .= "<div class='row'>";
            while($row = mysqli_fetch_assoc($res))
            {
                $str = $row['short_desc'];
                if( strlen( $row['short_desc']) >200) {
                    $str = explode( "\n", wordwrap( $row['short_desc'], 200));
                    $str = $str[0] . '<div class="readMore">Read More ...</div>';
                }
          
                $TagsHTML = "";
                $Tags = explode(',', $row['tags']);
                foreach($Tags AS $Tag)
                {
                    $TagsHTML .= "<span>$Tag</span>";
                }
                $Output .= "<div class='col-lg-4 col-md-6 col-sm-12 commonPortfolio moreBox'>
                                <div class='potfolioDiv'>
                                    <a href='portfolios/$row[slug]' target='_blank'>
                                    <div class='thumbImage' style='background-image: url(assets/portfolioimage/$row[image]);'>
                                            <div class='domainName'>$row[name]</div>
                                        </div>
                                        <div class='thumbDesc'>
                                            <div class='tags'>
                                                $TagsHTML
                                            </div>
                                            <h2>$row[title]</h2>
                                            <p>$str</p>
                                        </div>
                                    </a>
                                </div>
                            </div>";
            }
            $Output .= "</div>";
        }
        else
        {
            $Output = "<center>No Result Found.</center>";
        }

        $total_page = ceil($total_record/$limit);
        $Response['Output'] = $Output;
        if($total_page > $page){
            $Response['next'] = true;
        }else{
            $Response['next'] = false;
        }
        
        $Response=json_encode($Response);
        echo $Response; exit;
    }

    if(isset($_GET['Action']) && $_GET['Action']=='getBlog')
    {
        
        $page = @$_GET['page'];
        if(empty($page)){
            $page = 1;
        }
        $limit = 4;
        $offset = ($page-1)*$limit;
        
        $sql = "SELECT * FROM blogs WHERE status=1 ORDER BY date desc";
        
        $res=mysqli_query($conn,$sql);
        $total_record = $res->num_rows;

        $sql.=" limit ".$offset.",".$limit; 
        $res=mysqli_query($conn,$sql);
        $Response = array();
        $Output = "";
        if(mysqli_num_rows($res) > 0)
        {

            $Output .= "<div class='row'>";
            while($row = mysqli_fetch_assoc($res))
            {
                $time  = strtotime($row['date']);
                $day   = date('d',$time);
                $month = date('M',$time);
                $year  = date('Y',$time);
                $str = $row['short_desc'];
                if( strlen( $row['short_desc']) > 200) 
                {
                    $str = explode( "\n", wordwrap( $row['short_desc'], 200));
                    $str = $str[0] . '<div class="readMore">Read More ...</div>';
                }
                $Output .='
                <div class="col-lg-6 col-md-6 col-sm-6 blogBox moreBox">
                    <div class="blogDiv">
                        <a href="blog/'.$row['slug'].'"  target="_blank">
                            <div class="thumbImage">
                                <img src="assets/blogimages/'.$row['image'].'" alt="image"/> 
                                <span class="dayMonth"> <span class="day">'.$day.'</span>
                                <span class="month">'.strtoupper($month).'</span>
                                <span class="day">'.$year.'</span> </span> 
                            </div>
                            <div class="thumbDesc">
                                <h2>'.$row['title'].'</h2>
                                <span class="adminBlogs"> 
                                    <span class="admin"><i class="fa fa-user"></i>Ditstek</span> 
                                    <span class="blogsIcon"><i class="fa fa-folder-o"></i>Blogs</span> 
                                </span><p>'.$str.'</p>
                            </div>
                        </a> 
                    </div>
                </div>';
            }
            $Output .= "</div>";
        }
        else
        {
            $Output = "<center>No Result Found.</center>";
        }

        $total_page = ceil($total_record/$limit);
        $Response['Output'] = $Output;
        if($total_page > $page){
            $Response['next'] = true;
        }else{
            $Response['next'] = false;
        }
        
        $Response=json_encode($Response);
        echo $Response; exit;
    }

    if (isset($_POST['Action']) && $_POST['Action'] == 'RemoveImage') {
       $id = $_POST['id'];
       $name = $_POST['name'];
       $update_slider_image= "UPDATE portfolio SET `slider_image` = TRIM(BOTH ',' FROM REPLACE( REPLACE(CONCAT(',',REPLACE(`slider_image`, ',', ',,'), ','),',$name,', ''), ',,', ',') ) WHERE id='$id'";
    // $update_slider_image = "UPDATE portfolio SET `slider_image` = REPLACE(slider_image, '$name', '') WHERE id=$id";
       mysqli_query($conn,$update_slider_image);
    }

    if (isset($_POST['Action']) && $_POST['Action'] == 'RemoveImageSection2') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $update_slider_image= "UPDATE portfolio SET `ss_image` = TRIM(BOTH ',' FROM REPLACE( REPLACE(CONCAT(',',REPLACE(`ss_image`, ',', ',,'), ','),',$name,', ''), ',,', ',') ) WHERE FIND_IN_SET('$name', `ss_image`) AND id='$id'";
        mysqli_query($conn,$update_slider_image);
       }

       if (isset($_POST['Action']) && $_POST['Action'] == 'RemoveImageSection1') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $update_slider_image= "UPDATE portfolio SET `fs_image` = TRIM(BOTH ',' FROM REPLACE( REPLACE(CONCAT(',',REPLACE(`fs_image`, ',', ',,'), ','),',$name,', ''), ',,', ',') ) WHERE FIND_IN_SET('$name', `fs_image`) AND id='$id'";
        mysqli_query($conn,$update_slider_image);
       }

    function get_tags($conn)
    {
		$sql= "SELECT * FROM tags WHERE status=1 ORDER BY tag";
        $res= mysqli_query($conn,$sql);
        $data=array();
        while($row= mysqli_fetch_assoc($res)){
        $data[]=$row;
        }
	    return $data;
	}

    function get_category($conn){
        
		$sql= "SELECT * FROM category  where status=1";
        $res= mysqli_query($conn,$sql);
        $data=array();
        while($row= mysqli_fetch_assoc($res)){
        $data[]=$row;

       }
	   return $data;
	}

	function get_portfolio($conn,$cat_id='',$portfolio_id='')
    {
		$sql="SELECT * from portfolio where  status=1";
		if($cat_id!='')
        {
         $sql.=" and category_id=$cat_id";
		}
		if($portfolio_id!='')
        {
			$sql.=" and id=$portfolio_id";
		}
		  
		$res=mysqli_query($conn,$sql);
		 $data= array();
         while($row=mysqli_fetch_assoc($res))
        {
			$data[]=$row;
		}
		return $data;
		
	}

    
	function get_blog($conn,$slug='')
    {
		if($slug!='')
        {
			$sql="SELECT * from blogs WHERE  status=1 AND slug='$slug'";
		}
		$res=mysqli_query($conn,$sql);
		 $data= array();
         while($row=mysqli_fetch_assoc($res))
         {
			$data[]=$row;
		}
		//print_r($data);
		return $data;
		
	}

    function get_portfolio_details($conn,$slug='')
    {
		if($slug!='')
        {
			$sql="SELECT * from portfolio WHERE  status=1 AND slug='$slug'";
		}
		$res=mysqli_query($conn,$sql);
		 $data= array();
         while($row=mysqli_fetch_assoc($res))
         {
			$data[]=$row;
		}
		//print_r($data);
		return $data;
		
	}

    function get_safe_value($conn,$str)
    {
        if($str!='')
        {
           $str=trim($str);
           return mysqli_real_escape_string($conn,$str);
        }
    }
   
    function pagination($total_pages,$pageno){
?>
        <li><a class="page-item page-link" href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
        <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Previous</a></li>
        
        <?php 
            if($total_pages < 6){

                for($i = 1; $i <= $total_pages; $i++ ){
        ?>
                    <li class="page-item <?php if($pageno == $i) {echo 'active'; } ?>">
                        <a class="page-link" href="?pageno=<?= $i; ?>"> <?= $i; ?> </a>
                    </li>
        <?php   } 
            }else{
                for($i = 1; $i <= 3; $i++ ){
        ?>
                    <li class="page-item <?php if($pageno == $i) {echo 'active'; } ?>">
                        <a class="page-link" href="?pageno=<?= $i; ?>"> <?= $i; ?> </a>
                    </li>
        <?php   
                } 
        ?>
                    <li class="page-item">
                        <a class="page-link" href="#"> .... </a>
                    </li>
        <?php
                if($pageno > 3){
                    if($pageno < $total_pages-2){
                        for($i = $pageno-1; $i <= $pageno+1; $i++ ){
        ?>
                            <li class="page-item <?php if($pageno == $i) {echo 'active'; } ?>">
                                <a class="page-link" href="?pageno=<?= $i; ?>"> <?= $i; ?> </a>
                            </li>
        <?php   
                        }
        ?>
                        <li class="page-item">
                            <a class="page-link" href="#"> .... </a>
                        </li>
                        <li class="page-item <?php if($pageno == $total_pages) {echo 'active'; } ?>">
                            <a class="page-link" href="?pageno=<?= $total_pages; ?>"> <?= $total_pages; ?> </a>
                        </li>
        <?php
                    }elseif($pageno == $total_pages){
                        for($i = $total_pages-2; $i <= $total_pages; $i++ ){
        ?>
                            <li class="page-item <?php if($pageno == $i) {echo 'active'; } ?>">
                                <a class="page-link" href="?pageno=<?= $i; ?>"> <?= $i; ?> </a>
                            </li>
        <?php   
                        }
                   }else{
                        for($i = $pageno-2; $i <= $total_pages; $i++ ){
        ?>
                            <li class="page-item <?php if($pageno == $i) {echo 'active'; } ?>">
                                <a class="page-link" href="?pageno=<?= $i; ?>"> <?= $i; ?> </a>
                            </li>
        <?php   
                        }
                   } 
         
                }else{
        ?>
                    <li class="page-item <?php if($pageno == $total_pages) {echo 'active'; } ?>">
                            <a class="page-link" href="?pageno=<?= $total_pages; ?>"> <?= $total_pages; ?> </a>
                        </li>
        <?php
                }
        ?>
                    
        <?php
            }

        ?>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
        <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a></li>
        <li><a class="page-item page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
<?php
    }
    