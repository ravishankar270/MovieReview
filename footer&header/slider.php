<style type="text/css">
    .slider
    {
        height: 600px;
        width: 100%;
        overflow: hidden;
        
    }
    .sliderchild{
        height: 600px;
        width:500%;
        animation: slider infinite 20s 2s;
    }
    .imagecon{
        height:600px;
        width: 20%;
        background-color: gray;
        float: left;
        line-height: 500px;
        color:white;
        text-align: left;
        font-size: 70px;
        font-family: 'Times New Roman', Times, serif;

    }
    
    .sliderchild a{
        padding-left: 50px;
        padding-top: 100px;
        color: white;
    }


    .imagecon:nth-child(1){
        background-image: url('');
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    .imagecon:nth-child(2){
        background-image: url('..homepage/homepage-images/parasite.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    .imagecon:nth-child(3){
        background-image: url('../homepage/homepage-images/007.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    .imagecon:nth-child(4){
        background-image: url('../homepage/homepage-images/widow.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
     .imagecon:nth-child(5){
        background-image: url('../homepage/homepage-images/joker.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    } 

     @keyframes slider{
        12.5%
        {
            margin-left: -100%;
        }
        25%
        {
            margin-left: -100%;
        }
        37.5%
        {
            margin-left: -200%;
        }
        50%
        {
            margin-left: -200%;
        }
        62.5%
        {
            margin-left: -300%;
        }
        75%
        {
            margin-left: -300%;
        }
        87.5%
        {
            margin-left: -400%;
        }
        100%
        {
            margin-left: -400%;
        }
    }
</style>
<div class="slider">
            <div class="sliderchild">
                <div class="imagecon">

                </div>
                <div class="imagecon">
                </div>
                <div class="imagecon">
                </div>
                <div class="imagecon">
                </div>  
                <div class="imagecon">
                </div>
            </div>
        </div>
