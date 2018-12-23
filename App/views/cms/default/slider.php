<?php
$slides = $this->model->getList(array('table'=>'cms_slide','where'=>array('is_active'=>1)));
?>

<div class="row2Wrap">
  
    <!-- Slider 1 -->
    <div class="slider" id="slider3">
        <?php 
        if($slides){
            foreach($slides as $img){
                 echo '<div style="background-image:url('.base_url('asset/files/slide/'.$img->img).')">
                        <span>
                            <h2>'.$img->caption.'</h2>
                        </span>
                       </div>';       
            }    
        }
       
       ?>
        <!-- The Arrows -->
        <i class="left" class="arrows" style="z-index:2; position:absolute;">
            <svg viewBox="0 0 100 100">
                <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
            </svg>
        </i>

        <i class="right" class="arrows" style="z-index:2; position:absolute;">
            <svg viewBox="0 0 100 100">
                <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) ">   
                </path>
            </svg>
        </i>
    </div>

</div>