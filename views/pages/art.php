<?php
include("scripts/search.php");
?>
<!DOCTYPE html>
<html lang="<?php echo LANG; ?>">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo TITLE; ?></title>
        <link href="../<?php echo ROUTE_CSS; ?>" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
        <a href="<?php echo BASE; ?>" type="button" class="btn btn-dark"><i class="fas fa-archway"></i></a>
        <a class="navbar-brand" href="<?php echo BASE; ?>">The Cleveland Museum of Art | <?php echo $data->data[0]->title ?></a>
        <form id="pesquisa" class="form-inline my-2 my-md-0" method="GET" action="<?php echo BASE; ?>">
        <div class="dropdown dropleft">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Type</button>
            <div class="dropdown-menu" style="width:1000px;" aria-labelledby="dropdownMenu2">
                <div class="row p-2">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Amulets" value="Amulets">
                    <label class="form-check-label" for="Amulets">Amulets</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Apparatus" value="Apparatus">
                    <label class="form-check-label" for="Apparatus">Apparatus</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Arms and Armor" value="Arms and Armor">
                    <label class="form-check-label" for="Arms and Armor">Arms and Armor</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Basketry" value="Basketry">
                    <label class="form-check-label" for="Basketry">Basketry</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Book Binding" value="Book Binding">
                    <label class="form-check-label" for="Book Binding">Book Binding</label>
                  </div>
                </div>
                <div class="row p-2">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Bound Volume" value="Bound Volume">
                    <label class="form-check-label" for="Bound Volume">Bound Volume</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Calligraphy" value="Calligraphy">
                    <label class="form-check-label" for="Calligraphy">Calligraphy</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Carpet" value="Carpet">
                    <label class="form-check-label" for="Carpet">Carpet</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Ceramic" value="Ceramic">
                    <label class="form-check-label" for="Ceramic">Ceramic</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Coins" value="Coins">
                    <label class="form-check-label" for="Coins">Coins</label>
                  </div>
                </div>
                <div class="row p-2">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Cosmetic Objects" value="Cosmetic Objects">
                    <label class="form-check-label" for="Cosmetic Objects">Cosmetic Objects</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Drawing" value="Drawing">
                    <label class="form-check-label" for="Drawing">Drawing</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Embroidery" value="Embroidery">
                    <label class="form-check-label" for="Embroidery">Embroidery</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Enamel" value="Enamel">
                    <label class="form-check-label" for="Enamel">Enamel</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Forgery" value="Forgery">
                    <label class="form-check-label" for="Forgery">Forgery</label>
                  </div>
                </div>
                <div class="row p-2">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Frame" value="Frame">
                    <label class="form-check-label" for="Frame">Frame</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Funerary Equipment" value="Funerary Equipment">
                    <label class="form-check-label" for="Funerary Equipment">Funerary Equipment</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Furniture and woodwork" value="Furniture and woodwork">
                    <label class="form-check-label" for="Furniture and woodwork">Furniture and woodwork</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Garment" value="Garment">
                    <label class="form-check-label" for="Garment">Garment</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Glass" value="Glass">
                    <label class="form-check-label" for="Glass">Glass</label>
                  </div>
                </div>
                <div class="row">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Glyptic" value="Glyptic">
                    <label class="form-check-label" for="Glyptic">Glyptic</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Illumination" value="Illumination">
                    <label class="form-check-label" for="Illumination">Illumination</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Implements" value="Implements">
                    <label class="form-check-label" for="Implements">Implements</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Inlays" value="Inlays">
                    <label class="form-check-label" for="Inlays">Inlays</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Ivory" value="Ivory">
                    <label class="form-check-label" for="Ivory">Ivory</label>
                  </div>
                </div>
                <div class="row p-2">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Jade" value="Jade">
                    <label class="form-check-label" for="Jade">Jade</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Jewelry" value="Jewelry">
                    <label class="form-check-label" for="Jewelry">Jewelry</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Knitting" value="Knitting">
                    <label class="form-check-label" for="Knitting">Knitting</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Lace" value="Lace">
                    <label class="form-check-label" for="Lace">Lace</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Lacquer" value="Lacquer">
                    <label class="form-check-label" for="Lacquer">Lacquer</label>
                  </div>
                </div>
                <div class="row p-2">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Leather" value="Leather">
                    <label class="form-check-label" for="Leather">Leather</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Linoleum Block" value="Linoleum Block">
                    <label class="form-check-label" for="Linoleum Block">Linoleum Block</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Lithographic Stone" value="Lithographic Stone">
                    <label class="form-check-label" for="Lithographic Stone">Lithographic Stone</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Manuscript" value="Manuscript">
                    <label class="form-check-label" for="Manuscript">Manuscript</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Metalwork" value="Metalwork">
                    <label class="form-check-label" for="Metalwork">Metalwork</label>
                  </div>
                </div>
                <div class="row p-2">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Miniature" value="Miniature">
                    <label class="form-check-label" for="Miniature">Miniature</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Miscellaneous" value="Miscellaneous">
                    <label class="form-check-label" for="Miscellaneous">Miscellaneous</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Mixed Media" value="Mixed Media">
                    <label class="form-check-label" for="Mixed Media">Mixed Media</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Monotype" value="Monotype">
                    <label class="form-check-label" for="Monotype">Monotype</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Mosaic" value="Mosaic">
                    <label class="form-check-label" for="Mosaic">Mosaic</label>
                  </div>
                </div>
                <div class="row p-2">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Musical Instrument" value="Musical Instrument">
                    <label class="form-check-label" for="Musical Instrument">Musical Instrument</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Netsuke" value="Netsuke">
                    <label class="form-check-label" for="Netsuke">Netsuke</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Painting" value="Painting">
                    <label class="form-check-label" for="Painting">Painting</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Papyri" value="Papyri">
                    <label class="form-check-label" for="Papyri">Papyri</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Photograph" value="Photograph">
                    <label class="form-check-label" for="Photograph">Photograph</label>
                  </div>
                </div>
                <div class="row p-2">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Plaque" value="Plaque">
                    <label class="form-check-label" for="Plaque">Plaque</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Plate" value="Plate">
                    <label class="form-check-label" for="Plate">Plate</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Portfolio" value="Portfolio">
                    <label class="form-check-label" for="Portfolio">Portfolio</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Portrait Miniature" value="Portrait Miniature">
                    <label class="form-check-label" for="Portrait Miniature">Portrait Miniature</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Print" value="Print">
                    <label class="form-check-label" for="Print">Print</label>
                  </div>
                </div>
                <div class="row p-2">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Relief" value="Relief">
                    <label class="form-check-label" for="Relief">Relief</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Rock crystal" value="Rock crystal">
                    <label class="form-check-label" for="Rock crystal">Rock crystal</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Rubbing" value="Rubbing">
                    <label class="form-check-label" for="Rubbing">Rubbing</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Sampler" value="Sampler">
                    <label class="form-check-label" for="Sampler">Sampler</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Scarabs" value="Scarabs">
                    <label class="form-check-label" for="Scarabs">Scarabs</label>
                  </div>
                </div>
                <div class="row p-2">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Sculpture" value="Sculpture">
                    <label class="form-check-label" for="Sculpture">Sculpture</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Seals" value="Seals">
                    <label class="form-check-label" for="Seals">Seals</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Silver" value="Silver">
                    <label class="form-check-label" for="Silver">Silver</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Spindle Whorl" value="Spindle Whorl">
                    <label class="form-check-label" for="Spindle Whorl">Spindle Whorl</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Stencil" value="Stencil">
                    <label class="form-check-label" for="Stencil">Stencil</label>
                  </div>
                </div>
                <div class="row p-2">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Stone" value="Stone">
                    <label class="form-check-label" for="Stone">Stone</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Tapestry" value="Tapestry">
                    <label class="form-check-label" for="Tapestry">Tapestry</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Textile" value="Textile">
                    <label class="form-check-label" for="Textile">Textile</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Time-based Media" value="Time-based Media">
                    <label class="form-check-label" for="Time-based Media">Time-based Media</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Tool" value="Tool">
                    <label class="form-check-label" for="Tool">Tool</label>
                  </div>
                </div>
                <div class="row p-2">
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Velvet" value="Velvet">
                    <label class="form-check-label" for="Velvet">Velvet</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Vessels" value="Vessels">
                    <label class="form-check-label" for="Vessels">Vessels</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Wood" value="Wood">
                    <label class="form-check-label" for="Wood">Wood</label>
                  </div>
                  <div class="form-check col-sm" type="button">
                    <input class="form-check-input" type="radio" name="type" id="Woodblock" value="Woodblock">
                    <label class="form-check-label" for="Woodblock">Woodblock</label>
                  </div>
                </div>
        </div>
          </div>
          <div class="form-group">
            <input class="form-control w-75" type="text" placeholder="Search" aria-label="Search" name="search">
            <input class="form-control w-25" type="text" placeholder="Limit" aria-label="Search" name="limit">
          </div>
          <input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"tabindex="-1"/>
        </form>
    </nav>

    <div class="p-3 px-md-4 mb-3 bg-white box-shadow">
        <div class="row">

            <div class="col bg-white">
                <figure class="figure text-center d-block">
                    <img src="<?php if($data->data[0]->images != null){
                        echo $data->data[0]->images->web->url;
                    }else{
                        echo "../images/no-image.jpg";
                    }
                     ?>" class="img-fluid">
                    <figcaption class="figure-caption"><?php echo $data->data[0]->measurements ?></figcaption>
                </figure>

                <?php
                    if(isset($data->data[0]->exhibitions->current[0])){
                        echo "<div id='accordion1' class='overflow-auto' style='height:300px;'>
                            <h3 class='text-center'>Exhibitions</h3>";
                        $x = 1;
                        foreach($data->data[0]->exhibitions->current as $value){
                            $newDate = date("d/m/Y", strtotime($value->opening_date));
                            if($x == 1){
                                echo "<div style='padding-right:5px;'>
                                        <div class='card'>
                                            <div class='card-header' id='1'>
                                                <h5 class='mb-0'>
                                                    <button class='btn btn-link' data-toggle='collapse' data-target='#collapse1$x' aria-expanded='true' aria-controls='collapse1$x'>
                                                    ".$value->title."
                                                    </button>
                                                </h5>
                                            </div>
                                            
                                            <div id='collapse1$x' class='collapse show' aria-labelledby='1' data-parent='#accordion1'>
                                                <div class='card-body text-center'>".$value->description."<br><small>Opening Date: ".$newDate."</small></div>
                                            </div>
                                        </div>
                                    </div>";
                            }else{
                                echo "<div style='padding-right:5px;'>
                                        <div class='card'>
                                                <div class='card-header' id='1'>
                                                    <h5 class='mb-0'>
                                                        <button class='btn btn-link' data-toggle='collapse' data-target='#collapse1$x' aria-expanded='true' aria-controls='collapse1$x'>
                                                        ".$value->title."
                                                        </button>
                                                    </h5>
                                                </div>
                                
                                                <div id='collapse1$x' class='collapse' aria-labelledby='1' data-parent='#accordion1'>
                                                    <div class='card-body text-center'>".$value->description."<br><small>Opening Date: ".$newDate."</small></div>
                                                </div>
                                            </div>
                                    </div>";
                            }
                            $x++;
                        }

                        echo "</div>
                            <hr>";
                    }
                ?>
            </div>

            <div class="col">

                <?php 
                    echo "<div class='card'>
                            <div class='card-body'>";
                                if(isset($data->data[0]->creators[0]->description)){
                                    echo "<div class='row'>
                                            <p class='col text-center'>Author: ".$data->data[0]->creators[0]->description."</p>
                                        </div>";
                                }
                                echo "<div class='row'>";
                                        if(isset($data->data[0]->creation_date)){
                                            echo "<p class='col'>Creation date: ".$data->data[0]->creation_date."</p>";
                                        }
                                        if(isset($data->data[0]->type)){
                                            echo "<a href='".BASE."?type=".$data->data[0]->type."' class='col'>Type: ".$data->data[0]->type."</a>";
                                        }
                                        if(isset($data->data[0]->technique)){
                                            echo "<p class='col'>Technique: ".$data->data[0]->technique."</p>";
                                        }  
                                echo "</div>";
                                if(isset($data->data[0]->department)){
                                    echo "<div class='row'>
                                            <a href='".BASE."?department=".$data->data[0]->department."' class='col text-center'>Department: ".$data->data[0]->department."</a>
                                            <p class='col text-center'>Culture: ".$data->data[0]->culture[0]."</p>
                                        </div>";
                                }
                    echo    "</div>
                        </div>";
                ?>

                <?php 
                    if(isset($data->data[0]->wall_description)){
                        echo "<h3 class='text-center'>Wall Description</h3>";
                        echo $data->data[0]->wall_description;
                        echo "<hr>";
                    }
                ?>
                <?php 
                    if(isset($data->data[0]->fun_fact)){
                        echo "<h3 class='text-center'>Fun Fact</h3>";
                        echo $data->data[0]->fun_fact;
                        echo "<hr>";
                    }
                ?>

                <?php
                    if(isset($data->data[0]->citations[0])){
                        echo "<h3 class='text-center'>Citations</h3>";
                        $x = 1;
                        echo "<div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
                                <div class='carousel-inner'>
                                    <div class='carousel-item active text-center'>";
                        foreach($data->data[0]->citations as $value){
                            if($x == 1){
                                echo "<div class='card mx-auto' style='width: 80%;'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>".$value->citation."</h5>
                                            <h6 class='card-subtitle mb-2 text-muted'>".$value->page_number."</h6>";
                                            if(isset($value->url)){
                                                echo "<a href='http://".$value->url."' target='_blank' class='card-link'>".$value->url."</a>";
                                            }
                                echo "      </div>
                                     </div>
                                    </div>";
                            }else{
                                echo "<div class='carousel-item text-center'>";
                                echo "<div class='card mx-auto' style='width: 80%;'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>".$value->citation."</h5>
                                            <h6 class='card-subtitle mb-2 text-muted'>".$value->page_number."</h6>";
                                            if(isset($value->url)){
                                                echo "<a href='http://".$value->url."' target='_blank' class='card-link'>".$value->url."</a>";
                                            }
                                echo "      </div>
                                    </div>";
                                echo "</div>";
                            }
                            $x++;
                        }

                        echo "</div>
                        <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                          <span class='text-primary' aria-hidden='true'><i class='fas fa-angle-left'></i></span>
                          <span class='sr-only text-primary'>Previous</span>
                        </a>
                        <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                          <span class='text-primary' aria-hidden='true'><i class='fas fa-angle-right'></i></span>
                          <span class='sr-only text-primary'>Next</span>
                        </a>
                      </div>";
                    }
                ?>

            </div>

        </div>
  <div>
  <footer class="footer row w-100 py-4">
    <div class="mx-auto">
      <span class="text-muted">Copyright <i class="far fa-copyright"></i> <a href='https://www.clevelandart.org/' target='_BLANK'>The Cleveland Museum of Art</a></span>
    </div>
  </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../<?php echo ROUTE_JS; ?>"></script>
    </body>
</html>