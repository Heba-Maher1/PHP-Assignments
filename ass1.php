<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Assignment </title>
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <!-- main template for css -->
    <link rel="stylesheet" href="Css/style.css">
    <!-- render all elements normally -->
    <link rel="stylesheet" href="Css/normalize.css">
    <!-- font awesome library -->
    <link rel="stylesheet" href="Css/all.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Andada+Pro:wght@400;500;600;700;800&family=Crete+Round&family=Montserrat:wght@300&family=Open+Sans:wght@700&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,700&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body>
    <h1 class="text-center">The First Assignment </h1>
<div class="accordion p-4 " id="accordionPanelsStayOpenExample">
    <!-- The First Question -->
  <div class="accordion-item shadow bg-body-tertiary my-3">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Question 1:
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
        
      <?php
            function checkSameCharacters($str)
            {         
                if (strlen($str) >= 4) {
                    $firstTwoChar = substr($str, 0, 2);
                    $lastTwoChar = substr($str, -2);
            
                    if ($firstTwoChar === $lastTwoChar) {
                        return "The first and last two characters are the same";
                    }
                    return  "The first and last two characters are not the same";
                }
                   return "The lenght of string is less than 4 characters";
            
            }
            echo checkSameCharacters("Hehe")
        ?>
        </div>
    </div>
  </div>

    <!-- The Second Question -->
  <div class="accordion-item shadow bg-body-tertiary my-3">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
      Question 2:
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
            <?php
                function startWithGo($str)
                {
                        $word = substr($str, 0, 2);
                        if ($word === 'Go') {
                            return "Yes , It start with Go";
                        }
                        return "No , Not start with go";
                }
                
                echo startWithGo("sss");
            ?>
    </div>
    </div>
  </div>

    <!-- The Third Question -->
  <div class="accordion-item shadow bg-body-tertiary my-3">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Question 3:
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
            <?php
                function multiplyOfThreeOrSeven($number){
                    if($number >= 0 && ($number % 3 == 0 || $number % 7 == 0)){
                        return "The number is multiply of 3 or 7";
                    }
                       return "The number is not multiply of 3 or 7";
                }
                echo multiplyOfThreeOrSeven(27);
        
            ?>
    </div>
    </div>
  </div>

    <!-- The Fourth Question -->
  <div class="accordion-item shadow bg-body-tertiary my-3">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Question 4:
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
            <?php
                function theLargestNumber($num1 , $num2 , $num3){
                    if($num1 >= $num2 && $num1 >= $num3){
                        return "The number ".$num1." is the largest number";
                    }elseif($num2 >= $num1 && $num2 >= $num3){
                        return "The number ".$num2." is the largest number";
                    }else{
                        return "The number ".$num3." is the largest number";
                    }
                }
                
               echo theLargestNumber(1,5,5);
            ?>
    </div>
    </div>
  </div>

    <!-- The Fifth Question -->
  <div class="accordion-item shadow bg-body-tertiary my-3">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Question 5:
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
            <?php
                function theNearestToHundred($num1 , $num2){
                    if($num1 == 0 && $num2== 0){
                        return "0";
                    }elseif($num1 >= $num2){
                        return "The  number ".$num1." is the nearest to 100";
                    }else{
                        return "The number ".$num2." is the nearest to 100";
                    }
                }
                echo theNearestToHundred(10, 90);
            ?>
    </div>
    </div>
  </div>

    <!-- The Sixth Question -->
  <div class="accordion-item shadow bg-body-tertiary my-3">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Question 6:
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
            <?php
                function theLargestNumBetweenTwentyAndThirty($num1 , $num2){
                    if(($num1 >= 20 && $num1 <= 30) && ($num2 >= 20 && $num2 <= 30)){
                        if($num1 > $num2 ){
                            return "The largest lumber between the range 20-30 is ".$num1;
                        }else{
                            return "The largest lumber between the range 20-30 is ".$num2;

                        }
                    }else{
                        return "0";
                    }
                } 
                echo theLargestNumBetweenTwentyAndThirty(20,22);
        
            ?>
    </div>
    </div>
  </div>

    <!-- The Seventh Question -->
  <div class="accordion-item shadow bg-body-tertiary my-3">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Question 7:
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
            <?php
                function CountOccurrencesInString($string){
                $counter = 0;
                $digits = str_split($string);

                foreach($digits as $digit){
                    if(is_numeric($digit)){
                        $counter++;
                    }
                }
                return $counter;
            }

            echo CountOccurrencesInString("heba4398334545");
           ?>
    </div>
    </div>
  </div>

    <!-- The Eighth Question -->
  <div class="accordion-item shadow bg-body-tertiary my-3">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Question 8:
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
      <?php
                function sumOfIntegerNumber($number){
                $sum = 0;
                $digits = str_split($number);

                foreach($digits as $digit){
                    if(is_numeric($digit)){
                        $sum+=$digit;
                    }
                }
                return $sum;
            }
            echo sumOfIntegerNumber(1122);
           ?>
         
             
    </div>
    </div>
  </div>

    <!-- The Ninth Question -->
  <div class="accordion-item shadow bg-body-tertiary my-3">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Question 9:
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
      <?php
                function reverseString($string){
                    $reverseString = '';
                     for($i=strlen($string)-1 ; $i >= 0 ; $i--){
                        $reverseString .= $string[$i];
                    }
                    return $reverseString;
                }
            echo reverseString("heba");
           ?>  
    </div>
    </div>
  </div>
</div>

    <script src="Javascript/bootstrap.bundle.min.js"></script>
</body>
</html>