<?php
class CategoryContainers{

    private $con, $username;
    public function __construct($con, $username){
        $this->con = $con;
        $this->username = $username;
    }

    public function showAllCategories(){
        $query = $this->con->prepare("SELECT * FROM categories");
        $query->execute();
        $html = "<div class='previewCategories'>";
        while($row=$query->fetch(PDO::FETCH_ASSOC)){
            $html .= $this->getCategoryHtml($row,null,true,true);
        }
        return $html . "</div>";
    }

    private function getCategoryHtml($sqlData, $title, $tvShows, $movies){
        $cateogryId = $sqlData["id"];
        $title = $title == null ? $sqlData["name"] : $title;

    if ($tvShows && $movies) {
        $entities = EntityProvider::getEntities($this->con, $cateogryId, 30);
    }else if($tvShows){
        //Get tv shows entities
    }else{
        //Get movies entities
    }

    if (sizeof($entities) == 0) {
        return;
    }

    $entitiesHtml = "";
    $previewProvider = new PreviewProvider($this->con, $this->username);
    foreach($entities as $entity){
        $entitiesHtml .= $previewProvider->createEntityPreviewSquare($entity); 
    }

        return "<div class='category'>
                    <a href='category.php?id=$cateogryId'>
                        <h3>$title</h3>
                    </a>

                    <div class='entities'>
                        $entitiesHtml
                    </div>
                </div>";
    }
}
?>

