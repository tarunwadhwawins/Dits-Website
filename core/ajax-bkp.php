<?php
    require_once('dbconnection.php');

    if(isset($_GET['Action']) && $_GET['Action']='getPortfolio')
    {
        $CategoryID = $_GET['CategoryID'];
        $TagName = $_GET['Tag'];

        if($TagName == 'All')
        {
            $sql = "SELECT portfolio.*,category.name FROM portfolio,category WHERE
            portfolio.category_id=category.id AND category_id='$CategoryID' AND portfolio.status=1";
            //$sql = "SELECT * FROM portfolio WHERE category_id='$CategoryID' AND status=1";
        }
        else
        {  
            $sql = "SELECT portfolio.*,category.name FROM portfolio,category WHERE
            portfolio.category_id=category.id AND category_id='$CategoryID' AND FIND_IN_SET('$TagName',tags) AND portfolio.status=1";
            // $sql = "SELECT * FROM portfolio WHERE category_id='$CategoryID' AND
            //  FIND_IN_SET('$TagName',tags) AND status=1";
        }
        
        $res=mysqli_query($conn,$sql);
        
        $Response = array();
        $Output = "";
        if(mysqli_num_rows($res) > 0)
        {

            $Output .= "<div class='row'>";
            while($row = mysqli_fetch_assoc($res))
            {
            $str = $row['short_desc'];
            if( strlen( $row['short_desc']) >200) 
           {
              $str = explode( "\n", wordwrap( $row['short_desc'], 300));
              $str = $str[0] . '<div class="readMore">Read More ...</div>';
           }
          
                $TagsHTML = "";
                $Tags = explode(',', $row['tags']);
                foreach($Tags AS $Tag)
                {
                    $TagsHTML .= "<span>$Tag</span>";
                }
                $Output .= "<div class='col-lg-4 col-md-6 col-sm-12 commonPortfolio' id='business'>
                                <div class='potfolioDiv'>
                                    <a href='portfolios/$row[slug]' target='_blank'>
                                    <div class='thumbImage thumbImage1' style='background-image: url(assets/portfolioimage/$row[image]);'>
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

        $Response['Output'] = $Output;
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
        
		$sql= "SELECT * FROM category where status=1";
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
   

    