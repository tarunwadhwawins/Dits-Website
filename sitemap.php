<?php
require_once('core/dbconnection.php');
$html = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
  <url>
    <loc>https://www.ditstek.com/</loc>
    <lastmod>2021-06-22T07:10:13+00:00</lastmod>
    <priority>1.00</priority>
  </url>
  ';

$sql = "SELECT * FROM meta_tags WHERE slug!='/' ";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res) > 0){
while($row = mysqli_fetch_assoc($res)){
$html .="
  <url>
    <loc>https://www.ditstek.com/".$row['slug']."</loc>
    <lastmod>".date('c')."</lastmod>
    <priority>0.80</priority>
  </url>
    ";

}
}


            

$sql = "SELECT * FROM blogs WHERE status=1 ORDER BY date desc";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res) > 0)
{
while($row = mysqli_fetch_assoc($res))
{
$html .="
  <url>
		<loc>https://www.ditstek.com/blog/".$row['slug']."</loc>
		<lastmod>".date('c',strtotime($row['date']))."</lastmod>
		<priority>0.80</priority>
	</url>
      ";

}
}
$sql = "SELECT * FROM portfolio WHERE status=1 ORDER BY date desc";
        
$res=mysqli_query($conn,$sql);
       
if(mysqli_num_rows($res) > 0)
{
while($row = mysqli_fetch_assoc($res))
{
$html .="
  <url>
		<loc>https://www.ditstek.com/portfolio/".$row['slug']."</loc>
		<lastmod>".date('c',strtotime($row['date']))."</lastmod>
		<priority>0.80</priority>
	</url>
      ";

}
}
$html.="
</urlset>
";

file_put_contents("sitemap.xml",$html);
        
echo "<h1>Sitemap genrated</h1>";